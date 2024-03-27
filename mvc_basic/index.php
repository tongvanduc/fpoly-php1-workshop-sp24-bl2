<?php

require_once './controllers/homeController.php';
require_once 'models/products.php';
require_once 'commons/helper.php';


//điều hướng

$act = $_GET['act'] ?? '/';

match($act){
    '/' => homeShow(),
};