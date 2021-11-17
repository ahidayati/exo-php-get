
<?php

$arrayPages = [
    'firstPage' => 'Text on first page.',
    'secondPage' => 'Text on second page',
];

if(isset($_GET['page'])){
    $pageIndex = $_GET['page'];
    if(isset($arrayPages[$pageIndex])){
        echo $arrayPages[$pageIndex];
    } else {
        echo 'This page does not exist';
    }
} else {
    echo 'Error';
}