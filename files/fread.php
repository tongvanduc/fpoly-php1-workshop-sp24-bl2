<?php
echo "<pre>";
$fp = fopen('./demo.txt', 'r');

if($fp){
    echo "mở file thành công";
}else {
    echo "mở file ko thành công";

    // LẶP QUA ĐỌC TỪNG DÒNG
    while (!feof($fp)) {
        fgets($fp) . PHP_EOL;
    }
}