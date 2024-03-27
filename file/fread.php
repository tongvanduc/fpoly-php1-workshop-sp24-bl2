

<?php
$fp= @fopen('./demo.txt','r');

if(!$fp){
    echo "mở file không thành công";
}else{
    echo " Mở file thành công <br>";

    while(!feof($fp)){
        echo fgets($fp);
    }
}
$array=@file('./data.csv');
print_r($array);

?>
