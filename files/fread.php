<?php

echo "<pre>";

$fp = @fopen('./demo.txt', "r");
//kiểm tra
if(!$open){
    echo "MỞ file ko thành công!";
}else{
    echo "Mở file thành công!";
}