<?php
<<<<<<< HEAD
echo "<pre>";
$fp = @fopen('data.csv', "r");
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    echo 'Mở file thành công <br>';
    // Lặp qua từng dòng để đọc
    while(!feof($fp))
    {
=======

echo "<pre>";

$fp = @fopen('./data.csv', "r");

// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
} else {
    echo 'Mở file thành công <br>';
    
    // Lặp qua từng dòng để đọc
    while (!feof($fp)) {
        
>>>>>>> 7218ae10f4b4003a1748e39fb938248d5e8dd313
        echo fgets($fp) . PHP_EOL;
    }
}

<<<<<<< HEAD
$array = @file('data.csv'); // chuyển đổi file sang mảng
print_r($array);
=======
$array = @file('./data.csv'); // chuyển đổi file sang mảng
print_r($array);
>>>>>>> 7218ae10f4b4003a1748e39fb938248d5e8dd313
