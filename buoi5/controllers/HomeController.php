<?php

function homeShow(){
    // $data = productListAll();

    require_once 'views/home.php';

    function homeTxtHint() {    
        echo $_REQUEST["str"] ?? null;
    }
}