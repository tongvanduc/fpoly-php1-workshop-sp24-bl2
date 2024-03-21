<?php

// Viết 1 or nhiều hàm hỗ trợ đc việc là validate dữ liệu theo nhu cầu
// sử dụng filter

$datas = [
    'email' => 'ahihi@gmail.com',
    'home_ip' => '1.2.5.6'
];

// validate([
//     'title' => 'required|email',
//     'home_ip' => 'required|ip',
// ], $data);

$key = array_keys($datas);
$value = array_values($datas);

$data = [
    $key,
    $value
];

print_r(data);

function validate($rules, $datas)
{

}

function required ($data){
    if(empty($data)){
        $result = "không được để trống";
        return false;
    }
}

function validateEmail($data[key]){
    $result = null;
    if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
        $result = "$data is a valid email address";
        return true;
    } else {
        $result = "$data is not a valid email address";
        return false;
    }
}
function validateIp($data[value]){
    $result = null;
    if (filter_var($data, FILTER_VALIDATE_IP)) {
        $result = "$data is a valid email address";
        return true;
    } else {
        $result = "$data is not a valid email address";
        return false;
    }
}

