<?php 
if(!function_exists('debug')){
    function debug($data){
        echo "<pre>";

        print_r($data);

        die;
    }
}
// Viết 1 hoặc nhiều hàm hỗ trợ đc việc là validate dữ liệu theo yêu cầu sử dụng filter_var
// $data = [
//     'email' => 'ahihi@gmail.com',
//     'home_ip' => '1.2.5.6'
// ];

// validate([
//     'title' => 'required|email',
//     'home_ip' => 'required|ip',
// ], $data);
$data = [
    'email' => 'ahihi@gmail.com',
    'home_ip' => '1.2.5.6'
];

$rule = [
    'title' => 'required|email',
    'home_ip' => 'required|ip',
];


validate($rule,$data);
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





