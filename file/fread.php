<?php

// mở file
$fp = fopen('./demo.txt','r');
if(!$fp){
    echo 'mở file không thành công';
}else{
    echo 'mở file thành công <br>'; 
    while(feof($fp)){
        echo fgets($fp);
    }
}
