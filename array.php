<?php
$array = [
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4367, 'first_name' => 'Ben', 'last_name' => 'Smith hi',],
    ['id' => 3109, 'first_name' => 'Joe', 'last_name' => 'Doe',],
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4567, 'first_name' => 'Ben', 'last_name' => 'hi Smith',],
    ['id' => 3609, 'first_name' => 'Joe', 'last_name' => 'Doe',],
];

echo "<pre>";
$arrayChunk = array_chunk($array, 2);
// print_r($array);

$arrayColum = array_column($array, 'last_name');
// print_r($arrayColum);

// https://www.w3schools.com/php/func_array_unique.asp
$arrayColumUnique = array_unique($arrayColum);
// print_r($arrayColumUnique);

// 
$idColum = array_column($array, 'id');
$first_name = array_column($array, 'first_name');

$result = array_combine($idColum, $first_name);
// print_r($result);

// https://www.w3schools.com/php/func_array_diff.asp
$files = scandir('./proof');
// unset($files[0]);
// unset($files[1]);
$files = array_diff($files, ['.', '..']);
// print_r($files);

// https://www.w3schools.com/php/func_array_keys.asp

// https://www.w3schools.com/php/func_array_values.asp
$a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
$keys = array_keys($a);
$values = array_values($a);
// echo "KEYS" . PHP_EOL;
// print_r($keys);
// echo "VALUES" . PHP_EOL;
// print_r($values);

// https://www.w3schools.com/php/func_array_map.asp
// / Bảng user
// "INSERT INTO users (`name`, `email`, `password`) VALUES ($virtualParams)"
$data = [
    'name' => 'NVA',
    'email' => 'a@gmail.com',
    'password' => 12345678
];
$keys = array_keys($data);
// $keys2 = array_map(function ($item){
//     return "`$item`";
// },$keys);

// // $strKeys = implode(', ', $keys);
// // $strKeys = '';
// // foreach($keys as $item){
// //     $strKeys .= "`item`,";
// // }
// print_r($keys2);
$keys2 = array_map(function ($item) {
    return "`$item`";
}, $keys);

$strKeys = implode(', ', $keys2);

// print_r($strKeys);


// $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
// $soChan = array_filter($a,function($item){
//     return $item % 2==0;
// });
// print_r($soChan);

$Smiths = array_filter($array,function($item){
    // return $item['last_name'] == 'Smith';
    return strpos($item['last_name'], 'Smith') ===0;
});
print_r($Smiths);