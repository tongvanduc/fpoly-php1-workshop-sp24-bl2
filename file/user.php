<?php
echo "<pre>";
$servername = "localhost";
$host = "3306";
$username = "root";
$dbname = "ex";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Truy vấn dữ liệu từ cơ sở dữ liệu
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // Tạo file csv và ghi dữ liệu vào
    $fp = fopen('./user.csv', "w+");
    // // Viết dong tiêu đề
    $column = array('name', 'email', 'phone', 'created_id', 'update_id');
    fputcsv($fp, $column);
    // Ghi dữ liệu từ câu truy vấn 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        fputcsv($fp, $row);
    }
    ;
    // đóng file
    fclose($fp);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


