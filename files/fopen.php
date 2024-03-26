<?php

echo "<pre>";
$open = fopen('./demo.txt', 'r');

if($open){
    echo "mở file thành công";
}else {
    echo "mở file ko thành công";
}