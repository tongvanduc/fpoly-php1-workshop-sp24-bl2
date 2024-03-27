<?php
echo "<pre>";
// 'r' 
// 'w+' 
// 'a+' 
// $fp = @fopen('./fwrite.php', 'w+'); 
$fp = @fopen('./data.csv', 'a+');

$data = [
    [
        'name' => "nguyễn Văn A",
        'email' => 'a@gmail.com',
        'phone' => '098765443321',
    ],
    [
        'name' => "nguyễn Văn B",
        'email' => 'b@gmail.com',
        'phone' => '098765443321',
    ],
    [
        'name' => "nguyễn Văn C",
        'email' => 'c@gmail.com',
        'phone' => '098765443321',
    ]
];

//kiển tra mở fiel thành công ko
if (!$fp) {
    echo 'Mở file thanh công';
} else {
    // echo 'Mở file ko thành cônh';
    //ghi dòng tiêu đề
    $column = array_keys($data[0]);
    // print_r($column);
    $tmp = implode(',', $column);
    foreach ($data as $item) {
        $record = array_values($item);
        $tmp = implode(',', $record) . PHP_EOL;
        fwrite($fp, $tmp);
    };
    fclose($fp);
}
