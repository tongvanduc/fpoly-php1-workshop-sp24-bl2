<?php
echo "<pre>";
$fp = fopen('./demo.txt', 'r');
// Kiem tr file mo thnah cong khong
if (!$fp) {
    echo "Mo file khong thanh cong";
} else {
    echo "Mo file thanh cong <br>";
    while (!feof(($fp))) {
        echo fgets($fp) . PHP_EOL;
    }
} 

