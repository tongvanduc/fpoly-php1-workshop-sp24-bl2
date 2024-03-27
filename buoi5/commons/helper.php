<?php

function require_file($path){
    $files = array_diff(scandir($path), ['.', '..']);

    foreach($files as $file){
        require_once $path . $file;
    }


}
if (!function_exists('debug')) {
    function debug($data)
    {
        echo "<pre>";

        print_r($data);

        die;
    }
}