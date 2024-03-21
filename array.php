<?php

$array = [
    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
];
[
    5698 => 'Peter',
    4767 => 'Ben'
];
echo "<pre>";
$arrayChunk = array_chunk($array, 2);

$arrayColumn = array_column($array, 'first_name');
print_r($arrayColumn);

// https://www.w3schools.com/php/func_array_unique.asp
$arrayColumnUnique = array_unique($arrayColumn);
print_r($arrayColumnUnique);

// https://www.w3schools.com/php/func_array_combine.asp
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);

// https://www.w3schools.com/php/func_array_diff.asp
// $files = scandir('./session1');
// $files = array_diff($files,'.','..');
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
// echo "KEYS" . PHP_EOL;
// print_r($keys);
// echo "VALUES" . PHP_EOL;
// print_r($values);

// https://www.w3schools.com/php/func_array_map.asp

$data= [
    'name' => 'NVA',
    'email' => 'a@gmail.com',
    'password' => 123456789
];
// $keys = array_keys($data);
// // $strKeys = implode(', ', $keys)
// $keys2 = array_map(function ($item) {
//     return "`$item`";
// }, $keys);

// $strKeys = implode(', ', $keys2);

// print_r($strKeys);

$Smiths = array_filter($array, function ($item) {
    return $item['last_name'] == 'Smith';
});
print_r($Smiths);