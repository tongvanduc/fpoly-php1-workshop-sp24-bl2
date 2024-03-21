<?php

echo "<pre>";

//Mã hóa password

//Thuật toán MD5
$password = md5(12345678); //Sau khi mã hóa thì lưu vào DB
//print_r($password);

//Giả định đăng nhập $_POST
$giadinhtrongDB = $password;
//if (md5($_POST['password']) == $giadinhtrongDB) {
    //Đúng pass
//} else {
    //Sai pass
//}

//Thuật mã HASH - mã Băm
$hash = password_hash('12345678', PASSWORD_DEFAULT);
//print_r($hash);

if (password_verify('12345678s', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>