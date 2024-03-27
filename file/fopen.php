<?php
echo "<pre>";
$open=@fopen('./demo.txt','a+');

if($open){
    echo "mở file thành công";
}else{
    echo "mở file không thành công";
}


?>