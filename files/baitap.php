<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // echo 'thanh cong';
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT name, email, phone, created_at, updated_at FROM User";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($data);

    $fp = fopen('users.csv', "a+");
    if (!$fp) {
        echo "mo k thanh cong";
    } else {
        echo "mo file thanh cong";
        $colum = array('name', 'email', 'phone', 'created_at', 'updated_at');
        $tmp = implode(',', $colum) . PHP_EOL;
        fwrite($fp, $tmp);
        foreach ($data as $item) {
            $record = array_values($item);
            $tmp =  implode(',', $record) . PHP_EOL;
            fwrite($fp, $tmp);
        }
        fclose($fp);
    }
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
