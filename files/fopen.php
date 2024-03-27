<?php
echo "<pre>";
// 'r' 
// 'w+' 
// 'a+' 
$open = @fopen('./demo.txt', 'a+'); // 'r' chỉ đọc được  đặt @ để ngăn chặn việc báo lỗi 

if ($open) {
    echo 'Mở file thanh công';
}
else{
    echo 'Mở file ko thành cônh';
}