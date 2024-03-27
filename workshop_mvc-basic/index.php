<?php

// commons
require_once "./commons/helper.php";

// models
require_once "./models/Product.php";

// controllers
require_once "./controllers/HomeController.php";

// Điều hướng
$act = $_GET['act'] ?? '/';

match($act){
    '/' => HomeShow()
};