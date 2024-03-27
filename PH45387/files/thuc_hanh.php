<?php

$fp = @fopen('./fwrite.csv', "a+");

$user = [
    ['name' => 'Nguyễn Văn A','email' => 'a@gmail.com','phone' => '0928887989','created_at' => '26-03-2024','updated_at' => '26-03-2024'],
    ['name' => 'Nguyễn Văn B','email' => 'b@gmail.com','phone' => '0928887989','created_at' => '26-03-2024','updated_at' => '26-03-2024'],
    ['name' => 'Nguyễn Văn C','email' => 'c@gmail.com','phone' => '0928887989','created_at' => '26-03-2024','updated_at' => '26-03-2024'],
];

if (!$fp) {
    echo 'Mở file không thành công';
} else {
    
    $column = array_keys($user[0]);
    $tmp = implode(',', $column) . PHP_EOL;
    fwrite($fp, $tmp);

    foreach ($user as $item) {
        $record = array_values($item);
        $tmp = implode(',', $record) . PHP_EOL;
        fwrite($fp, $tmp);
    }

    echo fread($fp, filesize('fwrite.csv'));
}