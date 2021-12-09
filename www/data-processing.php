<?php
$dbLink=mysqli_connect("localhost:3306", "root")
or die('Erreur de onnexion au serveur:'.mysqli_connect_error());
mysqli_select_db($dbLink , "mysql") or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
?>

<?php
 if($_POST ["action"] == 'mailer')
 { 
  $query = 'INSERT INTO `USER` (`CIVILITE`, `EMAIL`, `MDP`, `TELEPHONE`, `PAYSORIGINE`, `CGU`, `DATE`)
   VALUES (\''.$_POST['coche'].'\', \''.$_POST['email'].'\', \''.$_POST['password1'].'\', \''.$_POST['telephone'].'\', \''.$_POST['paysorigine'].'\', \''.$_POST['conditionschecked'].'\', \''.date('Y-m-d').'\');';

  if(!($dbResult = mysqli_query($dbLink, $query))) {
      echo 'Erreur de requête<br/>';
      echo 'Requête : ' . $query . '<br/>';
      exit();
      }
  echo "Envoyé à la table !!!";

/*

  echo '<br/><strong> Bouton géré !</strong><br/>';
   $message = 'Voici vos identifiants d\'inscription :' . $_POST ["identifiant"].PHP_EOL ;
   $message .= 'Sa civilité : '  . $_POST ["coche"].PHP_EOL;
   $message .= 'Email : ' . $_POST ["email"] . PHP_EOL;
   $message .= 'Mot de passe : ' . PHP_EOL . $_POST ["password1"];
   $message .= 'telephone : ' . PHP_EOL . $_POST ["telephone"];
   $message .= 'paysorigine : ' .  $_POST ["paysorigine"];
   $message .= 'conditions checked : '  . $_POST ["conditionschecked"]. PHP_EOL ;
  echo $message;
  mail( "ozeliurs@gmail.com", "message", $message);
  echo "le mail a été envoyé !!!";
  

  //<a href= "td2.php"> Revenir en arrière </a>
*/
}
 else
 {
 echo '<br/><strong>Bouton non géré !</strong><br/>';
 }
?>
