<?php
   
     $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
     $mysqli->set_charset("utf8");
     //Tu recuperes l'id du contact
     $mail = $_GET["id"];

     //Requete SQL pour supprimer le contact dans la base
     $sql = "DELETE FROM Vendeur WHERE AdresseMail = '$mail'";
     mysqli_query($mysqli, $sql);
     //Et la tu rediriges vers ta page contacts.php pour rafraichir la liste
     header('Location: listetousvendeur.php');
     //echo 'Vendeur supprimé. Cliquez <a href="listetousvendeur.php">ici</a> pour retourner à la liste des vendeurs';
?>