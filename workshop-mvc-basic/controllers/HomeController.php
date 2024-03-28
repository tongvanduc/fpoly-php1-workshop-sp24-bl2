<?php
function homeShow()
{
    $data = productListAll();
    require_file('./views/') ;
}