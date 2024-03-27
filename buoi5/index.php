<?php

//Khởi tạo ứng dụng: require file controller, model, connectdb, commons,..
//Điều hướng 

//commons
require_once './commons/helper.php';
// [
//      'homeShow' => [
//           './models/Product.php',
//           './contrllers/HomeController'
//      ]
// ]
//controllers
require_file('./controllers/');

//models
require_file('./models/');

//Điều hướng

$act = $_GET['act'] ?? '/';

match ($act) {
     '/' => homeShow(),

     'txthint' => homeTxtHint(),
};