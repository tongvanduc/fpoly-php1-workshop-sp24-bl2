<?php

$array = [
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben', 'last_name' => 'Smith',],
    ['id' => 3809, 'first_name' => 'Joe', 'last_name' => 'Doe',],
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben', 'last_name' => 'Smith',],
    ['id' => 3809, 'first_name' => 'Joe', 'last_name' => 'Doe',],
];

echo "<pre>";
//https://www.w3schools.com/php/func_array_chunk.asp
$arrChunk = array_chunk($array,2);                      //array_chunk : chia dữ liệu mảng thành 2 phần
print_r($arrChunk);

// https://www.w3schools.com/php/func_array_column.asp
$arrColumn = array_column($array,'first_name');         //array_column : lấy một cột từ 1 bản ghi
print_r($arrColumn);

//https://www.w3schools.com/php/func_array_unique.asp
$arrColumnUni = array_unique($arrColumn);               //array_unique($arrColumn) : Xóa các giá trị trùng lặp ( duplicate ) khỏi mảng đơn
print_r($arrColumnUni);

//https://www.w3schools.com/php/func_array_combine.asp
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$arrCombine =array_combine($fname,$age);                //array_combine($arrCombine) : Tạo một mảng bằng cách sử dụng các phần tử từ một mảng "khóa" và một mảng "giá trị":

print_r($arrCombine);


//====================== Test
$arrId = array_column($array,'id');
$arrName = array_column($array,'first_name');
$arrCom = array_combine($arrId,$arrName);
print_r($arrCom);

//https://www.w3schools.com/php/func_array_diff.asp
// $files = scandir('./proof');
// $files = array_diff($files, ['.', '..']);                 //array_diff() : So sánh các giá trị của hai mảng và trả về sự khác biệt
// print_r($files);  

// https://www.w3schools.com/php/func_array_keys.asp
// https://www.w3schools.com/php/func_array_values.asp

$a = array(
    "Name" => "Peter",
    "Age" => "41", 
    "Country" => "USA"
);

$keys = array_keys($a);
$values = array_values($a);

echo "KEYS".PHP_EOL;
print_r($keys);

echo "VALUES".PHP_EOL;
print_r($values);






