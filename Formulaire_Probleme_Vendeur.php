<?php
    $Type = isset($_POST["Type"])?$_POST["Type"] : "";
    $Objet = isset($_POST["Objet"])?$_POST["Objet"] : "";
    $Description = isset($_POST["Description"])?$_POST["Description"] : "";
    $id = isset($_POST["id"])?$_POST["id"] : "";
 $erreur = "";
    if($Type == "") {$erreur .= "<p><b>Le champ Type est vide. Merci de le renseigner.</b><br></p>";}
    if($Objet == "") {$erreur .= "<p><b>Le champ Objet est vide. Merci de le renseigner.</b><br></p>";}
    if($Description == "") {$erreur .= "<p><b>Le champ Description est vide. Merci de le remplir.</b><br></p>";}
    if($id == "") {$erreur .= "<p><b>Le champ Identifiant est vide. Merci de le renseigner.</b><br></p>";}
    if ($erreur == "") {echo '<td><img src="titresite.png" width="400" height="70">'; echo "<p><b>Nous avons bien pris en compte votre problème intiulé ".$Objet.".<br> Merci de nous l'avoir transmis.</b></p>";echo '<td><a href="pagevendeur.php"><img src="retour.png" width="150" height="150" border="10"> </a></td>';} 
 else {
 echo "Erreur : $erreur";
 }
?> 