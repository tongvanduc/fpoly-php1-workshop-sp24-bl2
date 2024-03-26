<?php

// Check tồn tại

// __DIR__ lấy full đường dẫn từ thư mục chứa

// Có thể dùng DIRECTORY_SEPARATOR  để tự động thêm / 

echo '<pre>';

const DS = DIRECTORY_SEPARATOR;

if (file_exists(__DIR__ . DS . './data.csv')) {
    echo 'Tồn tại';
} else {
    echo 'Ko tồn tại';
}

// Lấy nội dung của file bằng hàm filet_get_contents
// Ghi toàn bộ nội dung chuỗi ra file
file_put_contents('./img-uploaded.jpg', file_get_contents('./1.jpg'));


$data = [
    [
        'name' => 'Nguyễn Văn A',
        'email' => 'a@gmail.com',
        'phone' => '0868313293'
    ],
    [
        'name' => 'Nguyễn Văn B',
        'email' => 'B@gmail.com',
        'phone' => '0868313293'
    ],
    [
        'name' => 'Nguyễn Văn C',
        'email' => 'c@gmail.com',
        'phone' => '0868313293'
    ],
    [
        'name' => 'Nguyễn Văn D',
        'email' => 'd@gmail.com',
        'phone' => '0868313293'
    ],
];
// Tạo 1 file data.json bằng hàm file_put_contents
file_put_contents('./data.json', json_encode($data));

// Đọc từ file json ra ngoài bằng hàm file_get_contents
$data = json_decode(file_get_contents('./data.json', true));

print_r($data);

// Hàm copy từ 1 file sang file mới
// Trong đó $source là path file cần copy và $newpathlà path file cần di chuyển tới.
copy('./1.jpg', './img-copy.jpg');


// Hàm mrdir 
// Tạo một thư mục ( folder) mới
// Cú pháp: mkdir($path)

// Trong đó $path là đường dẫn đến folder cần tạo.
// Mặc định đề 0777 là full toàn quyền tạo file
mkdir('./upload/posts/20240326', '0777', true);
