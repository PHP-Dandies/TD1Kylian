<?php
 if($_POST ["action"] == 'mailer')
 { 
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
  ?> 
  <a href= "td2.php"> Revenir en arrière </a>
<?php 
}
 else
 {
 echo '<br/><strong>Bouton non géré !</strong><br/>';
 }
?>
