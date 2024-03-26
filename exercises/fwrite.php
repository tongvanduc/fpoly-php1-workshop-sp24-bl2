<?php

echo "<pre>";

$fp = @fopen('./data.csv', "w+");

$data = [
    ['name' => 'Nguyễn Văn A', 'email' => 'a@gmail.com', 'phone' => '0123456789', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], 
    ['name' => 'Nguyễn Văn B', 'email' => 'b@gmail.com', 'phone' => '0123456789', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
    ['name' => 'Nguyễn Văn C', 'email' => 'c@gmail.com', 'phone' => '0123456789', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
    ['name' => 'Nguyễn Văn D', 'email' => 'd@gmail.com', 'phone' => '0123456789', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]
];

// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
} else {
    // Ghi dòng tiêu đề
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
