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
    5698 => 'peter',
    4767 => 'ben'
];
echo "<pre>";


$arrayChunk = array_chunk($array, 2);

// print_r($arrayChunk);

$arrayColumn = array_column($array, 'first_name');
// print_r($arrayColumn);

$fname = array("peter","ben","joe");
$age = array("35","36","37");
$c = array_combine($fname, $age);
// print_r($c);

$files = scandir('./');
$files = array_diff($files, ['.', '..']);
// print_r($files);

$a = array(
    "name" => "peter",
    "age" => "35",
    "country" => "usa"
);
$keys = array_keys($a);
$values = array_values($a);
echo "KEYS" . PHP_EOL;
print_r($keys);
echo "VALUES" . PHP_EOL;
print_r($values);

$data = [
    'name' => 'NVa',
    'email' => '@gmail.com',
    'password' => 12345
];
$keys = array_keys($data);

$keys2 = array_map(function ($item) {
    return "`$item`";
}, $keys);

$strKeys = implode(', ', $keys2);
$strKeys = implode(', ', $keys);
print_r($strKeys);


$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

$soChan = array_filter($a, function ($item) {
    return $item % 2 == 0;
});
print_r($soChan);


// <?php
// array_chunk
//https://www.w3schools.com/php/func_array_column.asp

// $array=[

//     ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
//     ['id' => 4767,'two_name' => 'Ben','last_name' => 'Smith',],
//     ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
//     ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
//     ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
//     ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],

// ];
// echo "<pre>";



// $arrayChunk = array_chunk($array, 2 );

// // print_r($arrayChunk);

// //Array column

// $arrayColumn = array_column($array, 'two_name' );
// // print_r($arrayColumn);


// //Array unique
// $arrayUnique = array_unique($array);
// // print_r($arrayUnique);


// // array combine
// $name = ['Ben','Jame','Josh'];