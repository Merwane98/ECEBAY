<?php
    $Type = isset($_POST["Type"])?$_POST["Type"] : "";
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
    if($Quantite == "") {$erreur .= "<p><b>Le champ Quantité est vide. Merci de le renseigner.</b><br></p>";}
    if($Prix == "€" || $Prix == "") {$erreur .= "<p><b>Le champ Prix est vide. Merci de le renseigner.</b><br></p>";}
    if($Vendeur == "") {$erreur .= "<p><b>Le champ Identifiant est vide. Merci de le renseigner.</b><br></p>";}
    if($mdp == "") {$erreur .= "<p><b>Le champ Mot de passe est vide. Merci de le renseigner.</b><br></p>";}
    if ($erreur == "") {
        echo '<td><img src="titresite.png" width="400" height="70">'; echo "<p><b>Votre annonce concernant le/la ".$Type." ".$Titre." est en ligne.<br>Bonne vente !</b></p>";echo '<td><a href="ECE_AMAZON.html"><img src="retour.png" width="150" height="150" border="10"> </a></td>';

            $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
            $mysqli->set_charset("utf8");
            $requete = "INSERT INTO Article VALUES ('.$Type.', '.$Titre.', '.$Description.', '.$Quantite.', '.$Prix.', '.$Vendeur.')";
            $resultat = $mysqli->query($requete);

            $mysqli->close();
    } 
    else {
    echo "Erreur : $erreur";
    }



    

?> 

