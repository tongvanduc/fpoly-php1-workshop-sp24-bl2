<?php

echo "<pre>";

// Mã hóa pasword 


//thuật toán MDS
// $password=md5(12345678);// sau khi mã hóa thì lưu vapf databatse
// print_r($password);


// giả định đăng nhập $POST['pasword]
// $giadinhtrongDB=$password;
// if (md5($_POST['password'])==$giadinhtrongDB) {
//     # code...Đúng pas
// }else{
//     //sai pas
// }


// Thuật toán băm password_hash()
// Thuật mã HASH - mã Băm
$hash = password_hash('12345678', PASSWORD_DEFAULT);
// print_r($hash);

//giải mã hóa
if (password_verify('12345678s', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}