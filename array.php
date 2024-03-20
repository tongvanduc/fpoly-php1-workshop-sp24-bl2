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

//combine để chuyển giá trị của mảng thành key của mảng
$arrayCombine=array_combine(array_column($array,'id'),array_column($array,'first_name'));
//print_r($arrayCombine);

//array_diff lấy ra hết phần khác của mảng 1 với mảng 2
$file=scandir('./proof');
$file=array_diff($file,['.','..']);
// print_r($file);



// https://www.w3schools.com/php/func_array_keys.asp
// https://www.w3schools.com/php/func_array_values.asp
$a = array("Name" => "Peter", 
            "Age" => "41", 
            "Country" => "USA");



$key=array_keys($a);

$values=array_values($a);

//print_r($key);


// print_r($values);

//https://www.w3schools.com/php/func_array_map.asp

$data=[
    'name'=>'NVA',
    'email'=>'a@gmail.com',
    'pass'=>123
];

$keys=array_keys($data);
$key2=array_map(function($item){
    return "`$item`";
},$keys);

$strKeys = implode(', ', $key2);
//print_r($strKeys);


//array_filter


$a=[1,2,3,4,5,6,7,8,9,10,11,12];

$soChan=array_filter($a,function($item){
    return $item %2==0;
});
print_r($soChan);


