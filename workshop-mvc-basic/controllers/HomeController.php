<?php 

function homeShow() {    
    require_once 'views/home.php';
}

function homeTxtHint() {    
    echo $_REQUEST["str"] ?? null;
}
