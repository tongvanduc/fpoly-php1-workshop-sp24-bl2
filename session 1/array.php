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
// print_r($c);

// https://www.w3schools.com/php/func_array_diff.asp
// $files = scandir('/proof');
// $files = array_diff($files, ['.','..']);
// print_r($files);

// https://www.w3schools.com/php/func_array_keys.asp
// https://www.w3schools.com/php/func_array_values.asp
$a = array(
    "Name" => "Peter", 
    "Age" => "41", 
    "Country" => "USA"
);

// https://www.w3schools.com/php/func_array_map.asp
// Bảng user
// "INSERT INTO users (`name`, `email`, `password`) VALUES ($virtualParams)"
$data = [
    'name' => 'NVA',
    'email' => 'a@gmail.com',
    'password' => 12345678
];
$keys = array_keys($data);

$keys2 = array_map(function ($item) {
    return "`$item`";
}, $keys);

$strKeys = implode(', ', $keys2);
print_r($strKeys);


// https://www.w3schools.com/php/func_array_filter.asp
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

// $soChan = array_filter($a, function ($item) {
//     return $item % 2 == 0;
// });
// print_r($soChan);

$Smiths = array_filter($array, function ($item) {
    return $item['last_name'] == 'Smith';
});
print_r($Smiths);