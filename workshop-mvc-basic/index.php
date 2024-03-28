<?php

// Khởi tạo ứng dụng file controllers, views , commons, models
// Điều hướng request

// Commons
require_once './commons/helper.php';
// models
require_file('./models/');

// controllers
require_file('./controllers/');


// Điều hướng
$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => homeShow(),
};
