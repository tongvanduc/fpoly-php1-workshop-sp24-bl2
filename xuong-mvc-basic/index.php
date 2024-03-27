<?php
// Khởi tạo ứng dụng: require file controllers, models, connectdb, commons
// Điều hướng request

require_once './commons/helper.php';

require_file('./models/');

require_file('./controllers/');

// Điều hướng
$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => homeShow(),
    'txthint' => homeTxtHint()
};
