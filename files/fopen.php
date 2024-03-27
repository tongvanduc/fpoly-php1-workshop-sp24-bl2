<?php

echo '<pre>';

// https://tanhongit.com/bai-16-cac-ham-xu-ly-va-lam-viec-voi-file-trong-php/

// Mở file
$open = @fopen('./demo.txt', 'a+');

if($open){
    echo "Mở file thành công";
}else{
    echo "Mở file Không thành công";
}


// Đọc file