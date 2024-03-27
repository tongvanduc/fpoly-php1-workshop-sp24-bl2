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
$arrayChunk=array_chunk($array,2);
//print_r($arrayChunk);

$arrayColumn=array_column($array,'first_name');
//print_r($arrayColumn);

$arrayColumnUnique=array_unique($arrayColumn);
//print_r($arrayColumnUnique);

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
//print_r($c);


$arrayCombine=array_combine(array_column($array,'id'),array_column($array,'first_name'));
print_r($arrayCombine);
