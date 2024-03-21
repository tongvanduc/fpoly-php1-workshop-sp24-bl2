<?php
// Viết 1 or nhiều hàm hỗ trợ đc việc là validate dữ liệu theo nhu cầu
// sử dụng filter

$data = [
    'email' => 'ahihi@gmail.com',
    'home_ip' => '1.2.5.6',
    
];

$rules = [
    'email' => 'required|email',
    'home_ip' => 'required|ip',
    
];

session_start();

// Bắt buộc có dữ liệu
function required($field, $value) {
    if (empty($value)) {
        $_SESSION['errors'][] = "Trường $field là bắt buộc";
    }
}

// Email
function email($field, $value) {
    if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors'][] = "Trường $field không đúng định dạng email";
    }
}

// IP
function ip($field, $value) {
    if (!filter_var($value, FILTER_VALIDATE_IP)) {
        $_SESSION['errors'][] = "Trường $field không đúng";
    }
}


 
// validate($rule, $data);
function validate($rules, $data) {
    foreach ($data as $field => $value) {
        $rule = $rules[$field];

        $arrRule = explode('|', $rule);

        foreach ($arrRule as $rule) {
            $rule($field, $value);
        }
    }
}

$_SESSION['errors'] = [];

validate($rules, $data);

print_r($_SESSION['errors']);

