<?php include "header.php" ?>

<?php

//$url = "https://kaamelott.chaudie.re/api/all/";
//$content = file_get_contents($url);
//$json = json_decode($content, true);
//
////var_dump($json);
//
//foreach ($json as $key => $item){
//    echo $key;
//    var_dump($item);
//    echo "<br><br>";
//}

$arrayPersonnage = [
    'Angharad',
    'Anna',
    'Arthur',
    'Attila',
    'Belt',
    'Bohort',
    'Dagonet',
    'Edern',
    'Merlin',
    'Mevanwi'
];
?>

<div class="container">
    <div class="row">
        <div class="">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            foreach ($arrayPersonnage as $index => $item){
                                echo "<tr>";
                                echo "<td>". ($index+1) ."</td>";
                                echo "<td>".$item."</td>";
                                echo "<td><a class='btn btn-dark' href='kaamelott-citation.php?person=".$item."'>Voir une citation</a></td>";
                                echo "</tr>";
                            }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "footer.php" ?>