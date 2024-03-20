<?php
// array_chunk
//https://www.w3schools.com/php/func_array_column.asp

$Smiths=[

    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'two_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],

];
echo "<pre>";



$arrayChunk = array_chunk($Smiths, 2 );

// print_r($arrayChunk);

//Array column

// $arrayColumn = array_column($Smiths, 'two_name' );
// print_r($arrayColumn);


//Array unique
// $arrayUnique = array_unique($array);
// print_r($arrayUnique);


// array combine
$name = ['Ben','Jame','Josh'];

$a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
// print_r(array_keys($a));
// print_r(array_values($a));

// Bảng user
// "INSERT INTO users (`name`, `email`, `password`) VALUES ($virtualParams)"
// $data = [
//     'name' => 'NVA',
//     'email' => 'a@gmail.com',
//     'password' => 12345678
// ];
// $keys = array_keys($data);
// $strKeys = implode(',', $keys);

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