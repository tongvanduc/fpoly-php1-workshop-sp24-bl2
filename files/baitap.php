<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "file_user";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function getAll()
{
    try {
        $sql = "SELECT * FROM user";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

echo "<pre>";

$dataUser = getAll();

function exportFile($data)
{
    $fileOpen = @fopen("./data.csv", "a+");

    if (!$fileOpen) {
        echo 'Mở file không thành công';
    } else {
        $column = array_keys($data[0]);
        $tmp = implode(',', $column) . PHP_EOL;
        fwrite($fileOpen, $tmp);

        foreach ($data as $item) {
            $record = array_values($item);
            $tmp = implode(',', $record) . PHP_EOL;
            fwrite($fileOpen, $tmp);
        }
        fclose($fileOpen);
    }
}

exportFile($dataUser);