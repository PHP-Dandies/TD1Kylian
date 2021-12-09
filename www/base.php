<?php
include 'utils.inc.php' ;
?>

<?php
 $dbLink=mysqli_connect("localhost:3306", "root") or die('Erreur de onnexion au serveur:'.mysqli_connect_error());
 mysqli_select_db($dbLink , "mysql") or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
 ?>

<?php

$query='SELECT ID, EMAIL, DATE FROM USER;';

if (!($dbResult = mysqli_query($dbLink, $query)))
{
    echo'Erreurderequête<br/>';
    echo'Erreur:'.mysqli_error($dbLink).'<br/>'; 
    echo'Requête:'.$query.'<br/>';
    exit();
}
while(
    $dbRow=mysqli_fetch_assoc($dbResult))
    {
        echo $dbRow ['ID'].'<br/>';
        echo $dbRow ['EMAIL'].'<br/>';
        echo $dbRow ['DATE'].'<br/>';
        echo '<br/><br/>';
    }
    
?>