<?php
// array_chunk
//https://www.w3schools.com/php/func_array_column.asp

$array = [

    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben', 'last_name' => 'Smith',],
    ['id' => 3809, 'first_name' => 'Joe', 'last_name' => 'Doe',],
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben', 'last_name' => 'Smith',],
    ['id' => 3809, 'first_name' => 'Joe', 'last_name' => 'Doe',],

];
echo "<pre>";
// $co = array_column($array, 'id');
// $name = array_column($array, 'first_name');
// $hop = array_combine($co,$name);

// print_r($hop);




$arrayChunk = array_chunk($array, 2);


// print_r($arrayChunk);

//Array column

$arrayColumn = array_column($array, 'two_name');
// print_r($arrayColumn);


//Array unique
// $arrayUnique = array_unique($array);
// print_r($arrayUnique);


// array combine
$name = ['Ben', 'Jame', 'Josh'];
$age =['1','2','3'];


//array diff

// $files = scandir('./proof');
// $files = array_diff($files,['.','..']);


// print_r($files);

//ARRAY KEY, ARRAY VALUE
//https://www.w3schools.com/php/func_array_keys.asp
// https://www.w3schools.com/php/func_array_values.asp

// $a = array(
//     "Name" => "Peter",
//     "Age" => "41",
//     "Country" => "USA"
// );

// $keys = array_keys($a);
// $values = array_values($a);

// print_r($keys);
// print_r($values);


//https://www.w3schools.com/php/func_array_map.asp
//ARRAY MAP
// Bảng user
// "INSERT INTO users (`name`, `email`, `password`) VALUES ($virtualParams)"
// $data = [
//     'name' => 'NVA',
//     'email' => 'a@gmail.com',
//     'password' => 12345678
// ];
// $keys = array_keys($data);

// $keys2 = array_map(function ($item) {
//     return "`$item`";
// }, $keys);

// $strKeys = implode(', ', $keys2);

// print_r($strKeys);


// ARRAY FILTER
// https://www.w3schools.com/php/func_array_filter.asp
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

// $soChan = array_filter($a, function ($item) {
//     return $item % 2 == 0;
// });
// print_r($soChan);

// $Smiths = array_filter($array, function ($item) {
//     return $item['last_name'] == 'Smith';
// });
// print_r($Smiths);



