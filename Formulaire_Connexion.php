 <?php
session_start();
?>



<?php
	 $mail1 = isset($_POST["mail1"])?$_POST["mail1"] : "";
    $mdp1 = isset($_POST["mdp1"])?$_POST["mdp1"] : "";
    $typeclient = isset($_POST["typeclient"])?$_POST["typeclient"] : "";
 	$erreur = "";
 	$database = "ecebay";
	$_SESSION['a'] = $mail1;
    			
 	$db_handle = mysqli_connect('localhost', 'root', '');
 	$db_found = mysqli_select_db($db_handle, $database);

 	//si la BDD existe, faire le traitement
if($typeclient=="Acheteur"){
	if ($db_found) {

 		$sql = "SELECT * FROM Acheteur";
		if ($mail1 != "") {
		//on cherche le livre avec les paramètres titre et auteur
			$sql .= " WHERE AdresseMail='$mail1'";
			if ($mdp1 != "") {
			$sql .= " AND MotdePasse='$mdp1'";
			}
		}
		$result = mysqli_query($db_handle, $sql);
		if (mysqli_num_rows($result) == 0 OR  $mail1=="" OR $mdp1=="") {
		//le livre recherché n'existe pas
			echo "Erreur de connexion";

		}
 		else {
 			echo "connexion réussie";
 			header('Location: ACHETEURPageAccueil.php');	  
 		}
 	}
}
if($typeclient=="Vendeur"){
if ($db_found) {

 $sql = "SELECT * FROM Vendeur";
if ($mail1 != "") {
//on cherche le livre avec les paramètres titre et auteur
$sql .= " WHERE AdresseMail='$mail1'";
if ($mdp1 != "") {
$sql .= " AND MotdePasse='$mdp1'";
}
}
$result = mysqli_query($db_handle, $sql);
if (mysqli_num_rows($result) == 0 OR  $mail1=="" OR $mdp1=="") {
//le livre recherché n'existe pas
echo "Erreur de connexion";

}
 else {
 	echo "connexion réussie";
 	header('Location: pagevendeur.php');
 		  
 	}
 }
}
//fermer la connection
mysqli_close($db_handle);
?>
