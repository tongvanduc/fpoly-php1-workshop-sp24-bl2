<?php

echo "<pre>";



function retrieveDataFromDatabase() {

    $database = [
        ['name' => 'Nguyễn Văn A', 'email' => 'a@gmail.com', 'phone' => '0928887989'],
        ['name' => 'Nguyễn Văn B', 'email' => 'b@gmail.com', 'phone' => '0928887989'],
        ['name' => 'Nguyễn Văn C', 'email' => 'c@gmail.com', 'phone' => '0928887989'],
        ['name' => 'Nguyễn Văn D', 'email' => 'd@gmail.com', 'phone' => '0928887989']
    ];


    return $database;
}

// Hàm để format
function formatData($data) {
    $formattedData = [];

    foreach ($data as $item) {
        $formattedData[] = sprintf("Name: %s, Email: %s, Phone: %s", $item['name'], $item['email'], $item['phone']);
    }

    return $formattedData;
}

// Lấy dữ liệu từ cơ sở dữ liệu
$data = retrieveDataFromDatabase();

// Format dữ liệu
$formattedData = formatData($data);

print_r($formattedData);die();

// $database = [
//     ['name' => 'Nguyễn Văn A','email' => 'a@gmail.com','phone' => '0928887989'],
//     ['name' => 'Nguyễn Văn B','email' => 'b@gmail.com','phone' => '0928887989'],
//     ['name' => 'Nguyễn Văn C','email' => 'c@gmail.com','phone' => '0928887989'],
//     ['name' => 'Nguyễn Văn D','email' => 'd@gmail.com','phone' => '0928887989']
// ];


$fp = @fopen('./fwrite.csv', 'a+');
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
} else {
    // Gh
$column = array_keys($formattedData[0]);
    $tmp = implode(',', $column) . PHP_EOL;
    fwrite($fp, $tmp);

    foreach ($formattedData as $item) {
        $record = array_values($item);
        $tmp = implode(',', $record) . PHP_EOL;
        fwrite($fp, $tmp);
    }

    fclose($fp);
}

// Làm chức năng xuất file data csv
// Dữ liệu ở database
// Đối tượng User:
// name,
// email,
// phone,
// created_at,
// updated_at