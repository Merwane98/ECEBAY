<?php

$mysqli = new mysqli('localhost', 'root', '', 'ecebay');
$mysqli->set_charset("utf8");
     //Tu recuperes l'id du contact
$id = $_GET["id"];
     //Réajout bdd article quantité
$requete = "SELECT * FROM panier WHERE ID=".$id;
$resultat = $mysqli->query($requete);              
while ($ligne = $resultat->fetch_assoc()) { 

	$qtepanier = $ligne['Quantité'];

	$requete2 = "SELECT * FROM Article WHERE ID=".$id;
	$resultat2 = $mysqli->query($requete2);              
	while ($ligne2 = $resultat2->fetch_assoc()) {

		$quantité = $ligne2['Quantité'] + $ligne['Quantité'];
		$sql0 = "UPDATE Article SET Quantité = '$quantité'  WHERE ID =".$id;
		mysqli_query ($mysqli, $sql0) or die ('Erreur SQL !'.$sql0.'<br />'.mysqli_error($mysqli));

		//Requete SQL pour supprimer le contact dans la base
		mysqli_query($mysqli, "DELETE FROM Panier WHERE ID = ".$id);
		$mysqli->close(); }}

     //Et la tu rediriges vers ta page contacts.php pour rafraichir la liste
		header('Location: ACHETEURpannier.php');
		?>
