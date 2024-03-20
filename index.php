<?php
// An array that represents a possible record set returned from a database
$a = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    )
);

echo '<pre>';
$arrayChunk = array_chunk($a, 2);
print_r($arrayChunk);
$arrayColunm = array_column($a, 'first_name');
print_r($arrayColunm);
$arrayColunmUnique = array_unique($arrayColunm);


$fir = array_column($a, 'first_name');
$id = array_column($a, 'id');
$arrayCom = array_combine($fir, $id);

print_r($arrayCom);

$files = scandir('./proof');
$files = array_diff($files, ['.', '..']);
print_r($files);
// https://www.w3schools.com/php/func_array_keys.asp
// https://www.w3schools.com/php/func_array_values.asp
$aa = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
$key = array_keys($aa);
$value = array_values($aa);
// print_r($key);
// print_r($value);
//https://www.w3schools.com/php/func_array_map.asp
// Bang User
//"INSERT INTO user () value ()"
$data = [
    'name' => 'NVA',
    'email' => 'a@gmail.com',
    'password' => 12345678
];
// $keys = array_keys($data);

// $keys2 = array_map(function ($item) {
//     return "`$item`";
// }, $keys);

// $strKeys = implode(', ', $keys2);

// print_r($strKeys);
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

$Smith = array_filter($array, function ($item) {
    return $item['last_name'] == 'Smith';
});




// dfasfasdf






















