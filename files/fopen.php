<?php

echo "<pre>";

$open = @fopen('./demo.txt','a+');

if($open){
    echo "mo file thanh cong";
}else{
    echo "mo file k thanh cong";
}