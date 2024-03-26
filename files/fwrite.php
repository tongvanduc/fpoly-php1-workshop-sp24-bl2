<?php
$fp = @fopen('fwrite.txt', "a+");
// Kiểm tra file mở thành công không

$data = [
    ['name'=>'kieu van A','email'=>'a@gmail.com','phone'=>'0923987863'],
    ['name'=>'kieu van B','email'=>'a@gmail.com','phone'=>'0923987863'],
    ['name'=>'kieu van C','email'=>'a@gmail.com','phone'=>'0923987863'],
];
if (!$fp) {
    echo 'Mở file không thành công';
} else {
    echo 'Mở file thành công <br>';
    // ghi dong tieu de
    $colum = array_keys($data[0]);
    // print_r($colum);
    $tmp = implode(',',$colum).PHP_EOL;
    fwrite($fp,$tmp );

    foreach($data as $item){
        $record = array_values($item); 
        $tmp =  implode(',',$record) .PHP_EOL;
    fwrite($fp,$tmp);

    }
    fclose($fp);
}
