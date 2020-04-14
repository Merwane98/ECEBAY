<?php
   
     $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
     $mysqli->set_charset("utf8");
     //Tu recuperes l'id du contact
     $id = $_GET["id"];
     //Requete SQL pour supprimer le contact dans la base
     mysqli_query($mysqli, "DELETE FROM Article WHERE ID = ".$id);
     //Et la tu rediriges vers ta page contacts.php pour rafraichir la liste
     header('Location: pagevendeur.php');
?>