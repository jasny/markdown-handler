Markdown Handler
================

This little script adds an Apache handler that lets you view Markdown files with a .md extension
more prettily on your webserver.

The Markdown is styled as it would at GitHub.

It's based on a PHP Markdown implementation by [Michel Fortin](http://www.michelf.com/).

Installation
------------

 * Copy the markdown directory into your webroot.
 * Copy .htaccess to your root.

Alternatively

 * Copy the markdown directory to a shared directory like /usr/local/share.
 * Add the following code to your apache config

--
    Alias _markdown /usr/local/share/markdown
    Action markdown /_markdown/handler.php
    AddHandler markdown .md .markdown

Now visit a .md file on your webserver; you should see it as properly styled HTML :).
