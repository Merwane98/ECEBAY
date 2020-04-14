<?php
    $Type = isset($_POST["Type"])?$_POST["Type"] : "";
    $image = isset($_POST["image"])?$_POST["image"] : "";
    $Titre = isset($_POST["Titre"])?$_POST["Titre"] : "";
    $Description = isset($_POST["Description"])?$_POST["Description"] : "";
    $Quantite = isset($_POST["Quantite"])?$_POST["Quantite"] : "";
    $Prix = isset($_POST["Prix"])?$_POST["Prix"] : "";
    $Vendeur = isset($_POST["Vendeur"])?$_POST["Vendeur"] : "";
    $mdp = isset($_POST["mdp"])?$_POST["mdp"] : "";
 $erreur = "";
    if($Type == "") {$erreur .= "<p><b>Le champ Type est vide. Merci de le renseigner.</b><br></p>";}
    if($Titre == "") {$erreur .= "<p><b>Le champ Titre est vide. Merci de le renseigner.</b><br></p>";}
    if($Description == "") {$erreur .= "<p><b>Le champ Description est vide. Merci de le remplir.</b><br></p>";}
    if($image == "") {$erreur .= "<p><b>Le champ Image est vide. Merci de le remplir.</b><br></p>";}
    if($Quantite == "") {$erreur .= "<p><b>Le champ Quantité est vide. Merci de le renseigner.</b><br></p>";}
    if($Prix == "€" || $Prix == "") {$erreur .= "<p><b>Le champ Prix est vide. Merci de le renseigner.</b><br></p>";}
    if($Vendeur == "") {$erreur .= "<p><b>Le champ Identifiant est vide. Merci de le renseigner.</b><br></p>";}
    if($mdp == "") {$erreur .= "<p><b>Le champ Mot de passe est vide. Merci de le renseigner.</b><br></p>";}
    if ($erreur == "") {echo '<td><img src="titresite.png" width="400" height="70">'; echo "<p><b>Votre annonce concernant le ".$Type." ".$Titre." est en ligne.<br>Bonne vente !</b></p>";echo '<td><a href="pageadmin.php"><img src="retour.png" width="150" height="150" border="10"> </a></td>';} 
 else {
 echo "Erreur : $erreur";
 }
 // on se connecte à notre base
    $mysqli = new mysqli('localhost', 'root', '', 'eceamazon');
     $mysqli->set_charset("utf8");

// lancement de la requete
    $sql = "INSERT INTO Article VALUES (0,'$Type', '$Titre', '$Description', '$Quantite', '$Prix','$image', '$Vendeur')";

// on insere le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
    mysqli_query ($mysqli, $sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($mysqli));

// on ferme la connexion à la base
    mysqli_close($mysqli);
?> 