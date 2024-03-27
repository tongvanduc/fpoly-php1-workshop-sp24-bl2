<?php
echo "<pre>";
$open = fopen('./demo.txt', 'r');
if ($open) {
    echo "Mo file thanh cong";
} else {
    echo "Mo file khong thanh cong";
}