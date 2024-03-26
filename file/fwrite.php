<?php
// ĐỌC GHI FILE

$fp = @fopen('./fwrite.csv', "a+"); // w+ nội dung cũ sẽ xóa đi và thay bằng nội dung mới
// a+ dữ nguyên nội dung cũ ghi tiếp tục
echo '<pre>';
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


// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
} else {
    // echo 'Mở file thành công <br>';
    // Ghi dòng tiêu đề

    // Có thể xuồng dòng bằng "\n"
    $collum = array_keys($data[0]);

    $tmp = implode(',', $collum) . PHP_EOL;

    fwrite($fp, $tmp);

    foreach ($data as $item) {
        $record = array_values($item);
        $tmp = implode(',', $record) . PHP_EOL;
        fwrite($fp, $tmp);
    }

    fclose($fp);
}

//  ĐÓNG FILE KHI KO SỬ DỤNG