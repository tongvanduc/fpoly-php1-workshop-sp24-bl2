<?php
echo '<pre>';
// mã hóa password 

// mã hóa MD5
$password = md5(12345678); // sau khi mã hóa thì lưu và DB
print_r($password);

// giả định đăng nhập $_POST['password']
$giadinhtrongDB = $password;
// if(md5($_POST['password']) == $giadinhtrongDB ){
//     đúng pass
// }else{
//     sai pass
// }

echo '<br>';

// thuật mã HASH - mã băm
$hash = password_hash('12345678', PASSWORD_DEFAULT);
print_r($hash);

echo '<br>';

if (password_verify('12345678s', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

echo '<br>';
