<?php

$array = [
    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
];

echo "<pre>";
// chia mảng ra thành các mảng con
$array_chuck = array_chunk($array, 3);
// print_r($array_chuck);

// xuất mảng thành cột
$array_colums = array_column($array, 'first_name');
// print_r($array_colums);

// Hàm unique để values k bị lặp
$array_colums_unique = array_unique($array_colums);
// print_r($array_colums_unique);


// hàm combine dùng để kết hợp
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
// print_r($c);

// Bài tập kết hợp array_colums và array_combine
$array_id_colums = array_column($array, 'id');
$array_name_colums = array_column($array, 'first_name');
$combine = array_combine($array_id_colums,$array_name_colums);
// print_r($combine);


// hàm array_diff để loại bỏ những thành phần muốn bỏ trong mảng
// $files = scandir('./proof');
// $files = array_diff($files, ['.', '..']);
// print_r($files);


// array_key và array_values để lấy key hoặc values
$a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
$keys = array_keys($a);
$values = array_values($a);
// print_r($keys);
// print_r($values);


// array_map dùng để biến đổi dữ liệu thành kiểu mong muốn
// Bảng user
// "INSERT INTO users (`name`, `email`, `password`) VALUES ($virtualParams)"
$data = [
    'name' => 'NVA',
    'email' => 'a@gmail.com',
    'password' => 12345678
];
$keys = array_keys($data);

$keys2 = array_map(function ($item) {
    return "`$item`";
}, $keys);

$strKeys = implode(', ', $keys2);
// print_r($strKeys);


// array_filter dùng để trích xuất dữ liệu theo mong muốn
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

$soChan = array_filter($a, function ($item) {
    return $item % 2 == 0;
});
// print_r($soChan);

$Smiths = array_filter($array, function ($item) {
    return $item['last_name'] == 'Smith';
});
// print_r($Smiths);
