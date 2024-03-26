<?php
$open = @fopen('demo.txt', 'r'); // dùng @ đặt trước hàm fopen để ngăn chặn thông báo lỗi khi truyền sai đường dẫn file
if (!$open)
    echo "Mở file không thành công";
else
    echo "Mở file thành công";
?>  