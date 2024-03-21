<?php

echo "<pre>";
// Mã hóa password

// Thuật toán MD5
// $pass = md5(123132);    // Sau khi mã hóa thì lưu vào DB
// echo($pass);

// giả định đăng nhập $_POST['password']
// $giaDinhTrongDB = $password;
// if (md5($_POST['password']) == $giaDinhTrongDB) {
//     // Đúng Pass
// } else {
//     // Sai pass
// }


// Thuật mã HASH - mã Băm
$hash = password_hash('12345678', PASSWORD_DEFAULT);
// print_r($hash);

if (password_verify('12345678', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}