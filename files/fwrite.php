<?php
$fp = @fopen('fwrite.csv', "a+");
$data=[
    ['name'=>'Nguyễn Văn A','email'=>'a@gmail.com','phone'=>'135521445'],
    ['name'=>'Nguyễn Văn A','email'=>'a@gmail.com','phone'=>'135521445'],
    ['name'=>'Nguyễn Văn A','email'=>'a@gmail.com','phone'=>'135521445'],
    ['name'=>'Nguyễn Văn A','email'=>'a@gmail.com','phone'=>'135521445']

    
];
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
  //ghi dòng tiêu đề
  $column = array_keys($data[0]);
    $tmp = implode(',', $column) . PHP_EOL;
    fwrite($fp, $tmp);

    foreach ($data as $item) {
        $record = array_values($item);
        $tmp = implode(',', $record) . PHP_EOL;
        fwrite($fp, $tmp);
    }

    fclose($fp);
}
?>