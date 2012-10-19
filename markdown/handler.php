<?php
require('markdown.php');

header('Content-type: text/html; charset=utf-8');

$legalExtensions = array('md', 'markdown');

$file = realpath($_SERVER['PATH_TRANSLATED']);
if($file
	&& in_array(strtolower(substr($file,strrpos($file,'.')+1)), $legalExtensions)
	&& substr($file,0,strlen($_SERVER['DOCUMENT_ROOT'])) == $_SERVER['DOCUMENT_ROOT']) {
	$content = Markdown(file_get_contents($file));
} else {
	$content = "<p>Bad filename given</p>";
}

$filename = basename($file);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= dirname($_SERVER['SCRIPT_NAME']) ?>/style.css">
	<meta name="content-type" http-equiv="content-type" value="text/html; utf-8">
</head>
<body>
<div class="container">
  <div id="readme" class="clearfix announce instapaper_body md" data-path="/" style="display: block; ">
    <span class="name"><span class="mini-icon mini-icon-readme"></span> <?= $filename ?></span>
    <article class="markdown-body entry-content">
      <?= $content ?>
    </article>
  </div>
</div>
</body>
</html>
