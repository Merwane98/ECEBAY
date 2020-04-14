<?php
session_start();
?>

<?php
     $mail=$_SESSION['a'];
     $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
     $mysqli->set_charset("utf8");
     //Tu recuperes l'id du contact
     $id = $_GET["id"];
     $requete = "SELECT * FROM panier WHERE Acheteur =  '$mail' ";
     $resultat = $mysqli->query($requete);
     $ligne = $resultat->fetch_assoc();
     $requete2 = "SELECT * FROM Article WHERE ID =".$id;
     $resultat2 = $mysqli->query($requete2);
     while ($ligne = $resultat->fetch_assoc());{
     	while($ligne2 = $resultat2->fetch_assoc()){

     		
     		$titre = $ligne['Titre'];
     		$image = $ligne['URLimage'];
     		$description = $ligne['Description'];
     		$quantite = $ligne['Quantité'];
     		$prix = $ligne['Prix'];
     		$vendeur = $ligne2['Vendeur'];
	
    		$sql = "INSERT INTO commande values ($id, '$titre', '$image', '$description', $quantite, '$prix', '$mail', '$vendeur')";
    		mysqli_query ($mysqli, $sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($mysqli));

    		//$sql2 = "DELETE FROM panier WHERE Achteur =" .$mail;
    		//mysqli_query ($mysqli, $sql2);
		}//end while ligne2
	}//end while ligne

	header('Location : Formulaire_Achat.html');
	$mysqli->close();
?>