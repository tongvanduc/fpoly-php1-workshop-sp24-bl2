<?php
echo "<pre>";
//Mã hóa password

//thuật toán MD5
// $password=md5((12345678));//sau khi mã hóa rồi lưu vào DB
// print_r($password);

//Gỉa định đăng nhập $_POST['pasword']

// $giaDinhTrongDB=$password;
// if(md5($giaDinhTrongDB)==$password){
//     echo 'đúng pass';
// }
// else echo 'sai pass';


// Thuật mã HASH - mã Băm
$hash = password_hash('12345678', PASSWORD_DEFAULT);
// print_r($hash);

if (password_verify('12345678s', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

