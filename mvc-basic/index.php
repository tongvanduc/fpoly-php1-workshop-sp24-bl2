<?php 

// Khởi tạo ứng dụng: rquire file controllers, models, connectdb, commons 
// Điều hướng request

// commons
require_once './commons/helper.php';

// models
require_file('./models/');

// controllers
require_file('./controllers/');

// Điều hướng
$act = $_GET['act'] ?? '/';

match($act) {
    '/' => homeShow(),

    'txthint' => homeTxtHint(),
};