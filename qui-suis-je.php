<?php include 'header.php' ?>
<?php

$completePhrase = '';

if(isset($_GET['firstName'])){
    $firstName = $_GET['firstName'];
    $completePhrase .= 'Mon prénom est '.$firstName.', ';
}

if(isset($_GET['lastName'])){
    $lastName = $_GET['lastName'];
    $completePhrase .= 'mon nom est '.$lastName.', ';
}

if(isset($_GET['sex'])){
    $sex = $_GET['sex'];
    $completePhrase .= 'mon sexe est '.$sex.', ';
}

if(isset($_GET['age'])){
    $age = $_GET['age'];
    $completePhrase .= "j'ai ".$age." ans".', ';
}

if(isset($_GET['job'])){
    $job = $_GET['job'];
    $completePhrase .= "mon métier est ".$job.', ';
}



echo rtrim($completePhrase, ', ').".";

//this works too
//echo substr($completePhrase, 0, -2).".";


//test url
//http://localhost:8080/qui-suis-je.php?firstName=Annisa&lastName=Hidayati&age=30


?>
<?php include 'footer.php' ?>