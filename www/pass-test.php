<?php

if ($_POST ["bouger"] == ok)
{
    $dbLink=mysqli_connect("localhost:3306", "root") or die('Erreur de onnexion au serveur:'.mysqli_connect_error());
   
    mysqli_select_db($dbLink , "mysql") or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT MDP FROM USER WHERE EMAIL = '. $_POST ['login'];
    if ( $_POST ['mdp'] == $query) {
        echo ("ok");
    }
    else {
        echo ("nonono");
    }


}
?>