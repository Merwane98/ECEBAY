<?php


$IDannonce = isset($_POST["IDannonce"])?$_POST["IDannonce"] : "";
$IDacheteur = isset($_POST["IDacheteur"])?$_POST["IDacheteur"] : "";
$CB = isset($_POST["CB"])?$_POST["CB"] : "";
$PrixOffre = isset($_POST["PrixOffre"])?$_POST["PrixOffre"] : "";
$PrixMax = isset($_POST["PrixMax"])?$_POST["PrixMax"] : "";
$erreur = "";

$mysqli = new mysqli('localhost', 'root', '', 'ecebay');
$mysqli->set_charset("utf8");
$requete = "SELECT Mode1 FROM panier WHERE ID=".$IDannonce;
$resultat = $mysqli->query($requete);              
while ($ligne = $resultat->fetch_assoc()) { 

	$Mode1 = $ligne['Mode1'];}



	mysqli_close($mysqli);

	if($IDannonce == "") {$erreur .= "<p><b>Le champ ID de l'annonce est vide. Merci de le renseigner.</b><br></p>";}
	if($IDacheteur == "") {$erreur .= "<p><b>Le champ ID de l'acheteur est vide. Merci de le renseigner.</b><br></p>";}
	if($CB == "") {$erreur .= "<p><b>Le champ Numéro de CB est vide. Merci de le remplir.</b><br></p>";}
	if($PrixOffre == "€") {$erreur .= "<p><b>Le champ prix de l'offre est vide. Merci de le renseigner.</b><br></p>";}
	if($PrixMax == "€" || $PrixMax == "") {$erreur .= "<p><b>Le champ Prix max est vide. Merci de le renseigner.</b><br></p>";}
	if($PrixMax <= $PrixOffre) {$erreur .= "<p><b>Le Prix max doit être supérieur au Prix offre. Merci de le modifier.</b><br></p>";}
	if($Mode1 == "") {$erreur .= "<p><b>Cette offre ne permet pas l'enchère.</b><br></p>";}
	if ($erreur == "") {echo '<td><img src="titresite1.png" width="200" height="70">'; echo "<p><b>Votre enchère concernant l'article ".$Titre." est en prise en compte.</p>";echo '<td><a href="Acheteurpannier.php"><img src="retour.png" width="150" height="150" border="10"> </a></td>';} 
	else {
		echo "Erreur : $erreur";
	}

	$mysqli = new mysqli('localhost', 'root', '', 'ecebay');
	$mysqli->set_charset("utf8");
	$requete = "SELECT Prix FROM Article WHERE ID=".$IDannonce;
	$resultat = $mysqli->query($requete);                        
	while ($ligne = $resultat->fetch_assoc()) { 

		$Prix = $ligne['Prix'];
// lancement de la requete
		$sql = "INSERT INTO enchere VALUES (0,'$IDannonce','$IDacheteur','$CB','$PrixOffre','$PrixMax')";
		mysqli_query ($mysqli, $sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($mysqli));
		
		if($Mode1 != ""){
			if ($PrixOffre>=$Prix){
				$sql1 = "UPDATE Article SET Prix = '$PrixOffre'  WHERE ID =".$IDannonce;
				$sql2 = "UPDATE panier SET Prix = '$PrixOffre'  WHERE ID =".$IDannonce;

				mysqli_query ($mysqli, $sql1) or die ('Erreur SQL !'.$sql1.'<br />'.mysqli_error($mysqli));
				mysqli_query ($mysqli, $sql2) or die ('Erreur SQL !'.$sql2.'<br />'.mysqli_error($mysqli));
			}}

			$requete2 = "SELECT PrixMax2 FROM Article WHERE ID=".$IDannonce;
			$resultat = $mysqli->query($requete2);                        
			while ($ligne = $resultat->fetch_assoc()) { 

				$PrixMax2 = $ligne['PrixMax2'];
			}
			$requete3 = "SELECT Vendeur FROM Article WHERE ID=".$IDannonce;
			$resultat = $mysqli->query($requete3);                        
			while ($ligne = $resultat->fetch_assoc()) { 

				$Vendeur = $ligne['Vendeur'];
			}
			if ($PrixMax >= $PrixMax2){
				$sql3 = "UPDATE Article SET PrixMax2 = '$PrixMax'  WHERE ID =".$IDannonce;
				mysqli_query ($mysqli, $sql3) or die ('Erreur SQL !'.$sql3.'<br />'.mysqli_error($mysqli));
				$sql4 = "UPDATE Article SET Prix = '$PrixOffre'  WHERE ID =".$IDannonce;
				mysqli_query ($mysqli, $sql4) or die ('Erreur SQL !'.$sql4.'<br />'.mysqli_error($mysqli));
				$sql5 = "UPDATE Article SET Acheteur = '$IDacheteur'  WHERE ID =".$IDannonce;
				mysqli_query ($mysqli, $sql5) or die ('Erreur SQL !'.$sql5.'<br />'.mysqli_error($mysqli));
				$sql6 = "UPDATE panier SET PrixMax2 = '$PrixMax'  WHERE ID =".$IDannonce;
				mysqli_query ($mysqli, $sql6) or die ('Erreur SQL !'.$sql6.'<br />'.mysqli_error($mysqli));
				$sql7 = "UPDATE panier SET Prix = '$PrixOffre'  WHERE ID =".$IDannonce;
				mysqli_query ($mysqli, $sql7) or die ('Erreur SQL !'.$sql7.'<br />'.mysqli_error($mysqli));
				$sql8 = "UPDATE panier SET acheteur = '$IDacheteur'  WHERE ID =".$IDannonce;
				mysqli_query ($mysqli, $sql8) or die ('Erreur SQL !'.$sql8.mysqli_error($mysqli));
			}
			if ($PrixMax >= $PrixMax2 && $PrixMax2 >= $PrixOffre){
				$sql9 = "UPDATE Article SET Prix = '$PrixMax2' + 1  WHERE ID =".$IDannonce;
				mysqli_query ($mysqli, $sql9) or die ('Erreur SQL !'.$sql9.'<br />'.mysqli_error($mysqli));
				$sql10 = "UPDATE panier SET Prix = '$PrixMax2' + 1  WHERE ID =".$IDannonce;
				mysqli_query ($mysqli, $sql10) or die ('Erreur SQL !'.$sql10.'<br />'.mysqli_error($mysqli));
			}
			if($PrixMax <= $PrixMax2){
				$sql11 = "UPDATE Article SET Prix = '$PrixMax'+1 WHERE ID =".$IDannonce;
				mysqli_query ($mysqli, $sql11) or die ('Erreur SQL !'.$sql11.'<br />'.mysqli_error($mysqli));
				$sql12 = "UPDATE panier SET Prix = '$PrixMax'+1 WHERE ID =".$IDannonce;
				mysqli_query ($mysqli, $sql11) or die ('Erreur SQL !'.$sql12.'<br />'.mysqli_error($mysqli));
			}}
			
			mysqli_close($mysqli);
			
			?> 