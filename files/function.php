<?php

// check ton tai
// const DS = DIRECTORY_SEPARATOR;
// if(file_exists(__DIR__ .'./demo.txt')){
//     echo "ton tai";
// }else{
//     echo "khong ton tai";
// }


file_put_contents('./aaaa.jpg',file_get_contents('./img.jpg'));

$data = [
    ['name'=>'kieu van A','email'=>'a@gmail.com','phone'=>'0923987863'],
    ['name'=>'kieu van B','email'=>'a@gmail.com','phone'=>'0923987863'],
    ['name'=>'kieu van C','email'=>'a@gmail.com','phone'=>'0923987863'],
];

file_put_contents('./data.json', json_encode($data));

// copy file

// copy('')

mkdir('./upload/posts','0777',true);