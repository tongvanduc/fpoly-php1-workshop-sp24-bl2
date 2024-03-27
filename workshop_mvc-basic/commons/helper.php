<?php

function require_file($path){
    $files = scandir($path);

    debug($files);
}

function debug($a){

    echo '<pre>';

    print_r($a);

    die;
}