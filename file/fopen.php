<?php

// mở file
$open = fopen('./demo.txt','r');
if($open){
    echo 'mở file thành công';
}else{
    echo 'mở file không thành công';
}

