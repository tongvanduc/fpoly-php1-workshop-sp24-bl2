<?php
$fp = @fopen('demo.txt', "r");
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    echo 'Mở file thành công <br>';
    echo fread($fp, filesize('demo.txt'));
} ?>