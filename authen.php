<<<<<<< HEAD
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
=======
<?php 

echo "<pre>";

// Mã hóa password

// Thuật toán MD5
$password = md5(12345678); // sau khi mã hóa thì lưu vào DB
// print_r($password);

// giả định đăng nhập $_POST['password']
$giaDinhTrongDB = $password;
// if (md5($_POST['password']) == $giaDinhTrongDB) {
//     // Đúng Pass
// } else {
//     // Sai pass
// }
>>>>>>> 7218ae10f4b4003a1748e39fb938248d5e8dd313


// Thuật mã HASH - mã Băm
$hash = password_hash('12345678', PASSWORD_DEFAULT);
// print_r($hash);

if (password_verify('12345678s', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
<<<<<<< HEAD

=======
>>>>>>> 7218ae10f4b4003a1748e39fb938248d5e8dd313
