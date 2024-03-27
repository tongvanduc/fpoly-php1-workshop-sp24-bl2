<?php
echo "<pre>";
// 'r' 
// 'w+' 
// 'a+' 
$fp = @fopen('./data.csv', 'r'); // 'r' chỉ đọc được  đặt @ để ngăn chặn việc báo lỗi 

if ($open) {
    echo 'Mở file thanh công';
} else {
    echo 'Mở file ko thành cônh';
    //lặp để đọc từng dòng
    while (!feof($fp)) {
        echo fgets($fp) . PHP_EOL;
    }
}


$array = @file('./data.csv'); // chuyển đổi file sang mảng
print_r($array);