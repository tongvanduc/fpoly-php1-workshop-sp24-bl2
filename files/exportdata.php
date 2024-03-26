<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "PHP3";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Truy vấn dữ liệu từ bảng User
$sql = "SELECT name, email, phone, created_at, updated_at FROM User";
$result = $conn->query($sql);

// Kiểm tra xem có dữ liệu trả về không
if ($result->num_rows > 0) {
    // Mở hoặc tạo file CSV
    $file = fopen("users.csv", "w");

    // Viết tiêu đề cho file CSV
    fputcsv($file, array('Name', 'Email', 'Phone', 'Created At', 'Updated At'));

    // Ghi dữ liệu từ cơ sở dữ liệu vào file CSV
    while($row = $result->fetch_assoc()) {
        fputcsv($file, $row);
    }

    // Đóng file CSV
    fclose($file);
} else {
    echo "0 results";
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>