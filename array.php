<?php

$array = [
    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
];

echo "<pre>";

// $arrayChunk = array_chunk($array, 2);
// // print_r($arrayChunk);

// $arrayColum = array_column($array, "first_name");
// // print_r($arrayColum);

// $arrayUnique = array_unique($arrayColum);
// print_r($arrayUnique);

$col1 = array_column($array, "id");
$col2 = array_column($array, "first_name");

$arrayCombine = array_combine($col1, $col2);
print_r($arrayCombine);

$files = scandir('./session 1');
$files = array_diff($files, ['.', '..']);
print_r($files);

$a = array(
    "Name" => "Peter",
    "Age" => "41",
    "Country" => "USA"
);

$keys = array_keys($a);
$values = array_values($a);

echo "KEYS" . PHP_EOL;
print_r($keys);

echo "VALUES" . PHP_EOL;
print_r($values);

// Bảng user
// "INSERT INTO users (`name`, `email`, `password`) VALUES ($virtualParams)"
// $data = [
//     'name' => 'NVA',
//     'email' => 'a@gmail.com',
//     'password' => 12345678
// ];
// $keys = array_keys($data);
// $strKeys = implode(', ', $keys);
// print_r($strKeys);

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