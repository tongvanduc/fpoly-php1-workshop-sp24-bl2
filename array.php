<?php
// An array that represents a possible record set returned from a database
$array = [
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben', 'last_name' => 'Smith',],
    ['id' => 3809, 'first_name' => 'Joe', 'last_name' => 'Doe',],
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben', 'last_name' => 'Smith',],
    ['id' => 3809, 'first_name' => 'Joe', 'last_name' => 'Doe',],
];




echo '<pre>';
// Tham số đầu tiên là mảng, tham số 2 là số lượng bản ghi
$arrayChunk = array_chunk($array, 2);
// print_r($arrayChunk);

$arrayColumn = array_column($array, 'first_name');
// print_r($arrayColumn);

// https://www.w3schools.com/php/func_array_unique.asp
// Hàm unique chỉ hỗ trợ dữ liệu mảng đơn
$arrayClumnUnique = array_unique($arrayColumn);
// print_r($arrayClumnUnique);


// https://www.w3schools.com/php/func_array_combine.asp
// Hàm combine: gộp 2 mảng đơn với nhau 1 mảng là key, 1 mảng sẽ là value
$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");
$c = array_combine($fname, $age);
// print_r($c);

$arrId = array_column($array, 'id');
$arrName = array_column($array, 'first_name');
$arrayUser = array_combine($arrId, $arrName);
// print_r($arrayUser);


// https://www.w3schools.com/php/func_array_diff.asp
// Hàm array_diff: trả về phần tử ko giống nhau ở 2 mảng => ko muốn lấy 1 dữ liệu nào đó trong 1 mảng
$file = scandir('session1');
$file = array_diff($file, ['.', '..']); // lấy ra tất cả những phần khác ở mảng 1 và mảng 2
// print_r($file);

// https://www.w3schools.com/php/func_array_keys.asp
// https://www.w3schools.com/php/func_array_values.asp
// Hàm array_key: lấy ra key trong 1 mảng mà mình muốn lấy
// Hàm array_value: lấy ra giá trị
$a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
$keys = array_keys($a);
echo "Key" . PHP_EOL;
print_r($keys);
echo "Value" . PHP_EOL;
$values = array_values($a);
print_r($values);

// https://www.w3schools.com/php/func_array_map.asp
// Hàm array_map: nhận 2 tham số là 1 functiong callback và 1 tham số
// VD: bảng user
$data = [
    'name' => 'NVA',
    'email' => 'a@gmail.com',
    'password' => 1234567
];

$keys = array_keys($data);

$keys2 = array_map(function ($item) { // tự duyệt $item 
    return "`$item`";  // trả về giá trị mới cho mảng 
}, $keys);
$strKeys = implode(',', $keys); // Nối các phần từ con từ 1 mảng thành 1 chuỗi thông qua 1 thứ gì đó

print_r($strKeys);

echo PHP_EOL;
// Hàm rtrim: xóa ký tự cuối cùng 

// Hàm array_Filter: trích xuất dữ liệu -> tham số đầu tiên nhận vào 1 biến, tham số 2 là 1 funciton callback
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12];
$soChan = array_filter($a, function ($item) {
    return $item % 2 == 0;
});
print_r($soChan);

$array2 = [
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben1', 'last_name' => 'Smith',],
    ['id' => 3807, 'first_name' => 'Joe', 'last_name' => 'Doe',],
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben2', 'last_name' => 'Smith',],
    ['id' => 3807, 'first_name' => 'Joe', 'last_name' => 'Doe',],
];

$smith = array_filter($array2, function ($item) {
    return $item['last_name'] == 'Smith';
});
// print_r($smith);

$array3 = [
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben1', 'last_name' => 'Smith HIhhi',],
    ['id' => 3807, 'first_name' => 'Joe', 'last_name' => 'Doe',],
    ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',],
    ['id' => 4767, 'first_name' => 'Ben2', 'last_name' => 'Hihi Smith',],
    ['id' => 3807, 'first_name' => 'Joe', 'last_name' => 'Doe',],
];

$search = array_filter($array3, function ($item) {
    return strpos($item['last_name'], 'Smith') === 0;
});
print_r($search);