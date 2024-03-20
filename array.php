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
$arraychunk = array_chunk($array, 2);
//  print_r($arraychunk);
$arraycolum = array_column($array, 'first_name');
// print_r($arraycolum);
$arrayColumUnique = array_unique($arraycolum);
// print_r($arrayColumUnique);
$fname = array("peter", "ben", "joe");
$age = array("35", "37", "43");
$c = array_combine($fname, $age);
print_r($c);
//
$files = scandir('./proof');
$files = array_diff($files, ['.', '..']);
print_r($files);
$a = array(
    "Name" => "Peter",
    "Age" => "41",
    "Country" => "USA"
);
// $keys = array_keys($a);
// $values = array_values($a);
// echo "KEYS" . PHP_EOL;
// print_r($keys);
// echo "VALUES" . PHP_EOL;
// print_r($values);
// Bảng user
// "INSERT INTO users (`name`, `email`, `password`) VALUES ($virtualParams)"
$data = [
    'name' => 'NVA',
    'email' => 'a@gmail.com',
    'password' => 12345678
];
$keys = array_keys($data);
$strKeys = implode(', ', $keys);
print_r($strKeys);


$a = array(
    "Name" => "Peter",
    "Age" => "41",
    "Country" => "USA"
);
// $keys = array_keys($a);
// $values = array_values($a);
// echo "KEYS" . PHP_EOL;
// print_r($keys);
// echo "VALUES" . PHP_EOL;
// print_r($values);

//https://www.w3schools.com/php/func_array_map.asp
;

// Bảng user
// "INSERT INTO users (`name`, `email`, `password`) VALUES ($virtualParams)"
$data = [
    'name' => 'NVA',
    'email' => 'a@gmail.com',
    'password' => 12345678
];

// $keys = array_keys($data);
// // $strKeys = implode(', ', $keys);
// // print_r($strKeys);

// $keys2 = array_map(function ($item){

//     return "$item";
// } , $keys);
// $strKeys = implode(', ', $keys2);
// print_r($strKeys);

$a = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];

$soChan = array_filter($a , function($item){
    return $item %2 ==0 ;
});

print_r($soChan);

$Smiths = array_filter($array, function ($item) {
    return $item['last_name'] == 'Smith';
});
print_r($Smiths);


