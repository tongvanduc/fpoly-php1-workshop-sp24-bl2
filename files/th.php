<?php
require_once './connect.php';

if (!function_exists('listAll')) {
    function listAll($tableName)
    {
        try {
            $sql = "SELECT * FROM $tableName ORDER BY id ASC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

echo "<pre>";

$users = listAll('users');
$fp = @fopen('./fwrite.csv', "a+");


// print_r($users);

if (!$fp) {
    echo 'Mở file không thành công';
} else {
    // Gh
    echo "Mở file thành công";
$column = array_keys($users[0]);
    $tmp = implode(',', $column) . PHP_EOL;
    fwrite($fp, $tmp);

    foreach ($users as $user) {
        $record = array_values($user);
        $tmp = implode(',', $record) . PHP_EOL;
        fwrite($fp, $tmp);
    }

    fclose($fp);
}
require_once "./disconnect.php";
