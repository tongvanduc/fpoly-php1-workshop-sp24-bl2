<?php

echo "<pre>";

$fp = @fopen('./data.csv', "w+");

$data = [
    
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
