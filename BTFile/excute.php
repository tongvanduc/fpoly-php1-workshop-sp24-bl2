<?php
// Làm chức năng xuất file data csv
// Dữ liệu ở database
// Đối tượng User:
// name,
// email,
// phone,
// created_at,
// updated_at
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'da1_group10';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // cài đặt chế độ báo lỗi là xử lý ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // cài đặt chế độ trả dữ liệu
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo ("Connection failed: " . $e->getMessage());
}


echo '<pre>';



// Xử lý tạo ghi file
$fp = @fopen('./data.csv', "a+");

if (!$fp) {
    echo 'Mở file thất bại';
} else {
    // echo 'Mở file thành công';
    $sql = 'SELECT first_name, last_name, email, phone_number, created_at, updated_at FROM users';

    $result = $conn->query($sql);

    $array = false;

    foreach ($result as $row => $values) {

        if (empty($array)) {
            $collum = array_keys($values);
            $uniqueColumns = array_unique($collum);
            $name = implode(',', $uniqueColumns) . PHP_EOL;
            fwrite($fp, $name);
            $array = true;
        }

        $value = array_values($values);
        $line = implode(',', $value)  . PHP_EOL;
        fwrite($fp, $line);
    }
}
