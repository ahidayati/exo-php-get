<?php
include 'header.php';

$person = $_GET['person'];

$url = "https://kaamelott.chaudie.re/api/random/personnage/".$person;
$content = file_get_contents($url);
$json = json_decode($content, true);


//foreach ($json as $key => $item){
//    echo $key;
//    var_dump($item);
//    echo "<br><br>";
//}

echo "<div class='container my-5 text-center'><h2>Citation de : ".$person."</h2>";
echo "<p class='fs-4'>".$json['citation']['citation']."</p></div>";


include 'footer.php';