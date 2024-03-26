
 <?php
    // $fp = @fopen('./demo.txt', "r");
    // // Kiểm tra file mở thành công không
    // if (!$fp) {
    //     echo 'Mở file không thành công';
    // } else {
    //     echo 'Mở file thành công <br>';
    //     // Lặp qua từng dòng để đọc
    //     while (!feof($fp)) {
    //         echo fgets($fp) . PHP_EOL;
    //     }
    // }
    $array = @file('./data.csv'); // chuyển đổi file sang mảng
    foreach ($array as $value) {
        print_r($value) ;
    }