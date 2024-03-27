<?php
<<<<<<< HEAD
$array = [
    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
    ['id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',],
    ['id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',],
    ['id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',],
];
//https://www.w3schools.com/php/func_array_chunk.asp
$arrayChunk=array_chunk($array,2);
echo "<pre>";
// print_r($arrayChunk);
//https://www.w3schools.com/php/func_array_column.asp
$arrayColumn=array_column($array,'first_name');
// print_r($arrayColumn);

//https://www.w3schools.com/php/func_array_unique.asp
$arrayClumnUnique=array_unique($arrayColumn);
// print_r($arrayClumnUnique);

//https://www.w3schools.com/php/func_array_combine.asp

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
// print_r($c);


$arrayId=array_unique(array_column($array,'id'));
$arrayFirstName=array_unique(array_column($array,'first_name'));

$kethop=array_combine($arrayId,$arrayFirstName);
// print_r($kethop);

//https://www.w3schools.com/php/func_array_diff.asp
$files = scandir('./proof');
$files=array_diff($files,['.','..']);
=======

$array = [
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben 1', 'last_name' => ' Smith Ahihi',],
    ['id' => 3807, 'first_name' => 'Joe', 'last_name' => 'Doe',],
    ['id' => 5693, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4765, 'first_name' => 'Ben 2', 'last_name' => 'Ahihi Smith',],
    ['id' => 3807, 'first_name' => 'Joe', 'last_name' => 'Doe',],
];

echo "<pre>";

// https://www.w3schools.com/php/func_array_chunk.asp
$arrayChunk = array_chunk($array, 2);
// print_r($arrayChunk);

// https://www.w3schools.com/php/func_array_column.asp
$arrayColumn = array_column($array, 'first_name');
// print_r($arrayColumn);

// https://www.w3schools.com/php/func_array_unique.asp
$arrayColumnUnique = array_unique($arrayColumn);
// print_r($arrayColumnUnique);

// https://www.w3schools.com/php/func_array_combine.asp
$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");
$c = array_combine($fname, $age);
// print_r($c);

// https://www.w3schools.com/php/func_array_diff.asp
$files = scandir('./proof');
$files = array_diff($files, ['.', '..']);
>>>>>>> 7218ae10f4b4003a1748e39fb938248d5e8dd313
// print_r($files);

// https://www.w3schools.com/php/func_array_keys.asp
// https://www.w3schools.com/php/func_array_values.asp
$a = array(
    "Name" => "Peter",
<<<<<<< HEAD
     "Age" => "41",
      "Country" => "USA"
    );
// $keys=array_keys($a);
// print_r($keys);

// $values=array_values($a);
// print_r($values);


https://www.w3schools.com/php/func_array_map.asp
=======
    "Age" => "41",
    "Country" => "USA"
);
// $keys = array_keys($a);
// $values = array_values($a);
// echo "KEYS" . PHP_EOL;
// print_r($keys);
// echo "VALUES" . PHP_EOL;
// print_r($values);

// https://www.w3schools.com/php/func_array_map.asp
>>>>>>> 7218ae10f4b4003a1748e39fb938248d5e8dd313
// Bảng user
// "INSERT INTO users (`name`, `email`, `password`) VALUES ($virtualParams)"
$data = [
    'name' => 'NVA',
    'email' => 'a@gmail.com',
    'password' => 12345678
];
<<<<<<< HEAD
$keys = array_keys($data);

$keys2 = array_map(function ($item) {
    return "`$item`";
}, $keys);

$strKeys = implode(', ', $keys2);

print_r($strKeys);

//https://www.w3schools.com/php/func_array_filter.asp
=======
// $keys = array_keys($data);
// $keys2 = array_map(function ($item) {
//     return "`$item`";
// }, $keys);
// $strKeys = implode(', ', $keys2);
// print_r($strKeys);

// https://www.w3schools.com/php/func_array_filter.asp
>>>>>>> 7218ae10f4b4003a1748e39fb938248d5e8dd313
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

// $soChan = array_filter($a, function ($item) {
//     return $item % 2 == 0;
// });
// print_r($soChan);

$Smiths = array_filter($array, function ($item) {
<<<<<<< HEAD
    return $item['last_name'] == 'Smith';
});
print_r($Smiths);
=======
    return strpos($item['last_name'], 'Smith') !== false;
    // return $item['last_name'] == 'Smith';
});
// print_r($Smiths);

$Smiths2 = [];
foreach($array as $item) {
    if (strpos($item['last_name'], 'Smith') !== false) {
        $Smiths2[] = $item;
    }
}
// print_r($Smiths2);
>>>>>>> 7218ae10f4b4003a1748e39fb938248d5e8dd313
