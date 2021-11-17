<?php

$value = $_GET['value'];
$operator = $_GET['operator'];


$arrayStr = getNumber($value);
$arrayInt = array_map('intval', $arrayStr);
var_dump($arrayStr);
echo '<br><br>';
var_dump($arrayInt);
echo '<br><br>';
var_dump(calculator($arrayInt, $operator));

function getNumber($input){
    $tempArray = str_split($input);
    $resultArray = [];
    foreach ($tempArray as $item){
        //    if a value is_numeric, push it into a temporary variable
        if(is_numeric($item) === true){
            $resultArray[] = $item;
        }
    }
    return $resultArray;
}

function calculator($arrayInput, $operatorInput){

    $total = $arrayInput[0];
    switch($operatorInput)
    {
        case "Addition":
            $total = array_sum($arrayInput);
            break;
        case "Subtraction":
            foreach ($arrayInput as $value){
            $total = $total - ($value);
            }
            break;
        case "Multiplication":
            $total = array_product($arrayInput);
            break;
        case "Division":
            foreach ($arrayInput as $value){
            $total = $total / $value;
            }
            break;
    }
    return $operatorInput .' results '. $total;
}