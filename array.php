<?php

$array = [
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben 1', 'last_name' => 'Smith Ahihi',],
    ['id' => 4769, 'first_name' => 'Ben 1', 'last_name' => 'Smith',],
    ['id' => 3807, 'first_name' => 'Joe', 'last_name' => 'Doe',],
    ['id' => 5693, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4765, 'first_name' => 'Ben 2', 'last_name' => 'Ahihi Smith',],
    ['id' => 3809, 'first_name' => 'Joe', 'last_name' => 'Doe',],
];
echo "<pre>";


// https://www.w3schools.com/php/func_array_chunk.asp
$arrayChunk = array_chunk($array, 2); //chia làm 3 array con có 2aray nhỏ bên trong

//  print_r($arrayChunk);


// https://www.w3schools.com/php/func_array_column.asp
// lấy mảng theo column
$arrayColum = array_column($array, 'first_name');
//  print_r($arrayColum);

// https://www.w3schools.com/php/func_array_unique.asp
//  chỉ dùng vs mảng đơn
$arrayColumUnique = array_unique($arrayColum);
//  print_r($arrayColumUnique);


//  https://www.w3schools.com/php/func_array_combine.asp
// gộp 2 magr lại vs nhau
$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");
$c = array_combine($fname, $age); //fnam là key age là value
//  print_r($c);


// bài tập từ mảng trên chuyển id thành key tên thành value
$arrayColumn = array_column($array, 'id');
//  print_r($arrayColumn);
$arrayColum = array_column($array, 'first_name');
$c = array_combine($arrayColumn, $arrayColum);
//  print_r($c);


// https://www.w3schools.com/php/func_array_diff.asp
// 
$files = scandir('./proof');
$files = array_diff($files, ['.', '..', 'i.php']); //để  loại bỏ những phần từ ko muốn hiển thị trog 1 mảng
// print_r($files);



// https://www.w3schools.com/php/func_array_keys.asp
// https://www.w3schools.com/php/func_array_values.asp
$a = array(
    "Name" => "Peter",
    "Age" => "41",
    "Country" => "USA"
);
// $key = array_keys($a); //lấy key
// $value = array_values($a); // lấy value

// echo "KEY" . PHP_EOL;
// print_r($key);
// echo "VALUE" . PHP_EOL;
// print_r($value);


// https://www.w3schools.com/php/func_array_map.asp
// Bnagr user
$data = [
    'name' => 'NVA',
    'email' => 'a@gmail.com',
    'password' => 12345678,
];

$keys = array_keys($data);
$key2 = array_map(function ($item) {
    return "`$item`";
}, $keys);
// print_r($keys);
$strKeys = implode(', ', $key2);
// print_r($strKeys);



// chichs suất sl
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
// lấy chia số cahwsn

// $soChan = array_filter($a, function ($item) {
//     // return + điều kiện 
//     return $item % 2 == 0;
// });
// print_r($soChan);


// $Smiths = array_filter($array, function ($item) { // item là 1 mảnh con của mảng array trên cùng
//     // return + điều kiện 
//     return $item['last_name'] == 'Smith';
// });
// print_r($Smiths);


// có thể dùng để lm chwucs năng tìm kiếm
$Smithss = array_filter($array, function ($item) { // item là 1 mảnh con của mảng array trên cùng
    // return + điều kiện 
    // return strpos($item['last_name'], 'Smith')=== 0;
    return strpos($item['last_name'], 'Smith') !==false;
    // return $item['last_name'] == 'Smith';
});
// print_r($Smithss);
