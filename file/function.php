<?php


echo "<pre>";

// Check tồn tại
// if (file_exists(__DIR__ . '/../array.php')) {
//     echo "Tồn tại";
// } else {
//     echo "KHÔNG Tồn tại";
// }

// Lấy nội dung của file hàm file_get_contents
// Ghi toàn bộ nội dung chuỗi ra file
// file_put_contents('./img-uploaded.jpg', file_get_contents('./img.jpg'));
// $data = [
//     ['name' => 'Nguyễn Văn A','email' => 'a@gmail.com','phone' => '0928887989'],
//     ['name' => 'Nguyễn Văn B','email' => 'b@gmail.com','phone' => '0928887989'],
//     ['name' => 'Nguyễn Văn B','email' => 'b@gmail.com','phone' => '0928887989'],
//     ['name' => 'Nguyễn Văn B','email' => 'b@gmail.com','phone' => '0928887989'],
// ];

file_put_contents('./data.json', json_encode($data));

// Làm chức năng xuất file data csv
// Dữ liệu ở database
// Đối tượng User:
// name,
// email,
// phone,
// created_at,
// updated_at