<?php

session_start();

echo "<pre>";
// Bắt buộc có dữ liệu

$data = [
    'title' => 'xuongphp',
    'email' => 'ahihi@gmail.com',
    'home_ip' => '1.2.5.6'
];

$rules = [
    'title' => 'required|title',
    'email' => 'required|email',
    'home_ip' => 'required|ip',
];

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
    if (! filter_var($value, FILTER_VALIDATE_IP)) {
        $_SESSION['errors'][] = "Trường $field không đúng";
    }
}

function validate($rules, $data) {
    foreach ($data as $field => $value) {
        $rules = $rules[$field];

        $arrRule = explode('|', $rules);

        foreach ($arrRule as $rule) {
            $rule($field, $value);
        }
    }
}

$_SESSION['errors'] = [];

validate($rules, $data);

print_r($_SESSION['errors']);