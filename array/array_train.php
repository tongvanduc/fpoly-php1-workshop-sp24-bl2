<?php
// An array that represents a possible record set returned from a database
$array = [
    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
];


// cắt mảng
$array_chunk = array_chunk($array,2);
echo "<pre>";
// print_r($array_chunk);

echo "<br>";
// lấy một côt trong mảng
$last_names = array_column($array, 'last_name');
$id = array_column($array, 'id');
// print_r($last_names);
//hợp nhất mảng với key và values
$c =array_combine($id,$last_names);
// print_r($c);

// $files = scandir('./proof');
// hàm xóa sự khác biệt trong mảng
// $files = array_diff($files, ['.', '..']);
// print_r($files);

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

$keys2 = array_map(function ($item) {
    return "`$item`";
}, $keys);

$strKeys = implode(', ', $keys2);

// print_r($strKeys);

$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

// $soChan = array_filter($a, function ($item) {
//     return $item % 2 == 0;
// });
// print_r($soChan);

$Smiths = array_filter($array, function ($item) {
    return $item['last_name'] == 'Smith';
});
print_r($Smiths);