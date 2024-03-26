<?php
echo "<pre>";

$open = @fopen('./demo.txt', 'r'); // 'r' chỉ đọc được  đặt @ để ngăn chặn việc báo lỗi 

if ($open) {
    echo 'Mở file thanh công';
}
else{
    echo 'Mở file ko thành công';
}