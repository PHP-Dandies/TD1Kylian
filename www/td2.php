<?php
include 'utils.inc.php' ;
?>
<form action="data-processing.php" method="post">
<div> 
 <input type ="texte" 
 name = "identifiant" placeholder = "Entrez votre identifiant :"/> 
</div>
<br>
<div> 
     Entrez votre civilité  : 
    <input type = "radio" id = "masculin" 
    name = "coche" value ="masculin"/> 
    <label for="masculin">masculin</label>
    <input type = "radio" id = "féminin" 
    name = "coche" value = "feminin"/>
    <label for="féminin"> féminin </label> 
</div> 
<br>
<div> 
 <input type ="email" 
 name = "email" placeholder = "Entrez votre email :"/> 
</div>
<br>
<div> 
 <input type ="password" 
 name = "password1" placeholder = "Entrez votre mot de passe :" /> 
</div>
<br>
<div> 
 <input type ="password" 
 name = "password2" placeholder = "confirmez votre mot de passe : " /> 
</div>
<br>
<div> 
 <input type ="tel" 
 name = "telephone" placeholder ="Entrez votre téléphone :"/> 
</div>
<br>
<select id = "paysorigine" name ="paysorigine"> 
<option value="">Pays d'origine</option>
<option value="France">France</option>
<option value="Allemagne">Allemagne</option>
<option value="Wakanda">Wakanda</option>
</select>
<br>
<div>
    <input type="checkbox" id = "conditions checked" 
    name = "conditionschecked" value = "conditionschecked" >
    <label for = "conditionschecked"> Conditions d'utilisation </label>
</div>
<br>
<input type="submit" name = "action" value = "mailer">
</form> 
