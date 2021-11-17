<?php

$number = $_GET['number'];

$result = str_split($number);
$countLoop = 0;

//foreach ($result as $value){
//    $nb = 0;
//
//    while ($nb !== intval($value)){
//        $nb = randomNumber();
//        ++$countLoop;
//    }
//}
//echo $countLoop;

function randomNumber(){
    return mt_rand(1, 9);
}

for($i=0; $i<10; $i++){
    foreach ($result as $value){
        $nb = 0;

        while ($nb !== intval($value)){
            $nb = randomNumber();
            ++$countLoop;
        }
    }
    echo 'increment '.$i.' loop='.$countLoop.'<br>';
}
echo 'average loop='.$countLoop/10;

//   while(condition is false /random number is not the same with result){
//    continue calling function random number
//    add increment to countLoop in each count