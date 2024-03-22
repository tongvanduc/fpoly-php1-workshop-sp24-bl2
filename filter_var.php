<?php


//viết một hoặc nhiều hàm hỗ trợ được validate theo nhu cầu sử dụng filter_var

// $data = [
//     'email' => 'ahihi@gmail.com',
//     'home_ip' => '1.2.5.6'
// ];

// validate([
//     'title' => 'required|email',
//     'home_ip' => 'required|ip',
// ], $data);


// $data = [
//     'email' => 'ahihi@gmail.com',
//     'home_ip' => '1.2.5.6'
// ];

// $rule = [
//     'title' => 'required|email',
//     'home_ip' => 'required|ip',
// ];

// validate($rule, $data);

// $validate = function($rule=[], $data=[]) {
//     $errors = []; // Mảng để lưu trữ thông điệp lỗi
    
//     // Duyệt qua mỗi trường và quy tắc kiểm tra
//     foreach ($rule as $field => $ruleset) {
//         $value = $data[$field] ?? null; // Lấy giá trị của trường từ dữ liệu hoặc mặc định là null nếu không tồn tại
        
//         foreach ($ruleset as $rule) {
//             // Phân tách quy tắc để lấy tên quy tắc và tham số (nếu có)
//             $ruleParts = explode(':', $rule);
//             $ruleName = $ruleParts[0];
//             $params = isset($ruleParts[1]) ? explode(',', $ruleParts[1]) : [];

//             // Kiểm tra và xử lý từng quy tắc
//             switch ($ruleName) {
//                 case 'required':
//                     // Kiểm tra xem trường có bắt buộc không
//                     if (empty($value)) {
//                         $errors[$field][] = "The $field field is required."; // Thêm thông điệp lỗi vào mảng
//                     }
//                     break;
//                 case 'email':
//                     // Kiểm tra xem giá trị có phải là địa chỉ email hợp lệ không
//                     if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
//                         $errors[$field][] = "The $field field must be a valid email address.";
//                     }
//                     break;
//                 case 'url':
//                     // Kiểm tra xem giá trị có phải là URL hợp lệ không
//                     if (!filter_var($value, FILTER_VALIDATE_URL)) {
//                         $errors[$field][] = "The $field field must be a valid URL.";
//                     }
//                     break;
//                 case 'numeric':
//                     // Kiểm tra xem giá trị có phải là số không
//                     if (!filter_var($value, FILTER_VALIDATE_INT) && !filter_var($value, FILTER_VALIDATE_FLOAT)) {
//                         $errors[$field][] = "The $field field must be a numeric value.";
//                     }
//                     break;
//                 case 'max':
//                     // Kiểm tra xem giá trị có vượt quá độ dài tối đa được cho phép không
//                     if (strlen($value) > $params[0]) {
//                         $errors[$field][] = "The $field field may not be greater than {$params[0]} characters.";
//                     }
//                     break;
//                 // Thêm các trường hợp khác cho các quy tắc khác nếu cần
//             }
//         }
//     }

//     return $errors; // Trả về mảng lỗi
// };
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
    if (! filter_var($value, FILTER_VALIDATE_IP)) {
        $_SESSION['errors'][] = "Trường $field không đúng";
    }
}

// function validate($rules, $data) {
//     foreach ($data as $field => $value) {
//         $rule = $rules[$field];
//     }
// }
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