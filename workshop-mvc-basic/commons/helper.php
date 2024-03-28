<?php
function require_file($path)
{
    $files = scandir($path);
    $files = array_diff($files, ['.', '..']);
    foreach ($files as $file) {
        require_once $path . $file;
    }
   
}