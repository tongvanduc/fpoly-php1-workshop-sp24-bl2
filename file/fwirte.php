<?php
$fp = @fopen('./fwirte.csv', 'a+');


$data = [
    [
        'name' => 'Nguyễn văn a',
        'email' => 'a@gmail.com',
        'phone' => '01264545'
    ],
    [
        'name' => 'Nguyễn văn a',
        'email' => 'a@gmail.com',
        'phone' => '01264545'
    ],
    [
        'name' => 'Nguyễn văn a',
        'email' => 'a@gmail.com',
        'phone' => '01264545'
    ]
];

if (!$fp) {
    echo "Mở file kh thành công";
} else {
    $column = array_keys($data[0]);
    $tmp=implode(',', $column).PHP_EOL;
    fwrite($fp, $tmp);

    foreach($data as $item){

        $record=array_values($item);
        $tmp=implode(',', $record).PHP_EOL;
        fwrite($fp,$tmp );
    }

    fclose($fp);
}



?>