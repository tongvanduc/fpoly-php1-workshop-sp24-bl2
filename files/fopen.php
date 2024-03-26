<?php

echo '<pre>';

$open = fopen('./demo.txt', 'r');

if ($open) {
    echo 'Mở file thành công!';
} else {
    echo 'Mở file không thành công!';
}
