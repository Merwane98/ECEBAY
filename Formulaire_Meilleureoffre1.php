<?php


$IDannonce = isset($_POST["IDannonce"])?$_POST["IDannonce"] : "";
$IDacheteur = isset($_POST["IDacheteur"])?$_POST["IDacheteur"] : "";
$CB = isset($_POST["CB"])?$_POST["CB"] : "";
$Proposition = isset($_POST["Proposition"])?$_POST["Proposition"] : "";
$erreur = "";

$mysqli = new mysqli('localhost', 'root', '', 'ecebay');
$mysqli->set_charset("utf8");
$requete = "SELECT Mode3 FROM article WHERE ID=".$IDannonce;
$resultat = $mysqli->query($requete);              
while ($ligne = $resultat->fetch_assoc()) { 

	$Mode3 = $ligne['Mode3'];}



$mysqli = new mysqli('localhost', 'root', '', 'ecebay');
$mysqli->set_charset("utf8");
$requete1 = "SELECT Titre FROM Article WHERE ID=".$IDannonce;
$resultat = $mysqli->query($requete1);              
while ($ligne = $resultat->fetch_assoc()) { 

	$Titre = $ligne['Titre'];}


$requete2 = "SELECT Vendeur FROM article WHERE ID=".$IDannonce;
$resultat = $mysqli->query($requete2);              
while ($ligne = $resultat->fetch_assoc()) { 

	$Vendeur = $ligne['Vendeur'];}

$mysqli = new mysqli('localhost', 'root', '', 'ecebay');
$mysqli->set_charset("utf8");
$requete3 = "SELECT Compteur FROM moffre WHERE IDacheteur='$IDacheteur' AND IDannonce=".$IDannonce;
$resultat = $mysqli->query($requete3);              
while ($ligne = $resultat->fetch_assoc()) { 

	$Compteur = $ligne['Compteur'];}

	mysqli_close($mysqli);
	if($Compteur == 0) {$erreur .= "<p><b>Vous avez déja utilisé les 5 propositions.</b><br></p>";}
	if($IDannonce == "") {$erreur .= "<p><b>Le champ ID de l'annonce est vide. Merci de le renseigner.</b><br></p>";}
	if($IDacheteur == "") {$erreur .= "<p><b>Le champ ID de l'acheteur est vide. Merci de le renseigner.</b><br></p>";}
	if($CB == "") {$erreur .= "<p><b>Le champ Numéro de CB est vide. Merci de le remplir.</b><br></p>";}
	if($Proposition == "€") {$erreur .= "<p><b>Le champ prix de l'offre est vide. Merci de le renseigner.</b><br></p>";}
	if($Mode3 == "") {$erreur .= "<p><b>Cette offre ne permet pas l'option meilleure offre.</b><br></p>";}
	if ($erreur == "") {echo '<td><img src="titresite1.png" width="200" height="70">'; echo "<p><b>Votre enchère concernant l'article ".$Titre." est en prise en compte.</p>";echo '<td><a href="Acheteurpannier.php"><img src="retour.png" width="150" height="150" border="10"> </a></td>';} 
	else {
		echo "Erreur : $erreur";
	}
	$mysqli = new mysqli('localhost', 'root', '', 'ecebay');
$mysqli->set_charset("utf8");
		$sql1 = "UPDATE moffre SET Proposition = '$Proposition' WHERE IDacheteur='$IDacheteur' AND IDannonce=".$IDannonce;
		mysqli_query ($mysqli, $sql1) or die ('Erreur SQL !'.$sql1.'<br />'.mysqli_error($mysqli));

		$sql2 = "UPDATE moffre SET Compteur = '$Compteur'- 1 WHERE IDacheteur='$IDacheteur' AND IDannonce=".$IDannonce;
		mysqli_query ($mysqli, $sql2) or die ('Erreur SQL !'.$sql2.'<br />'.mysqli_error($mysqli));
				
			
			mysqli_close($mysqli);
			if($Compteur == 0) {$erreur .= "<p><b>C'était votre dernière Proposition en vous souhaitant qu'elle soit concluante.</b><br></p>";}
			?> 