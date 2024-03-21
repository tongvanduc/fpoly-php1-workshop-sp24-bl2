<?php 
echo "<pre>";
//  https://xuanthulab.net/ham-filter-input-va-filter-var-trong-php.html
session_start();
$_SESSION['errors'] =[];
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
    if (! filter_var($value, FILTER_VALIDATE_IP)) {
        $_SESSION['errors'][] = "Trường $field không đúng";
    }
}

// Viết 1 or nhiều hàm hỗ trợ đc việc là validate dữ liệu theo nhu cầu
// sử dụng filter

$data = [
    'email' => 'ahiha2iagmail.com',
    'home_ip' => '1a'
];

$rules = [
    'email' => 'required|email',
    'home_ip' => 'required|ip',
];
function validate($rules, $data) {
    foreach ($data as $field => $value) {
        $rule = $rules[$field];

        $arrRule = explode('|',$rule); // Chuyển về dạng mảng để xử lí

        foreach($arrRule as $rule){
            // match($rule){
            //     'required' => required($field, $value),
            //     'email' =>email($field, $value),
            //     'ip' =>ip($field, $value)
            // };

            $rule($field,$value);
        }

    };

}

unset($_SESSION['errors']);

validate($rules,$data);

print_r($_SESSION['errors']);







