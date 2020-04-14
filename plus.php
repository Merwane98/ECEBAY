<?php 
session_start();
?>

<?php
     $mail=$_SESSION['a'];
     $mysqli = new mysqli('localhost', 'root', '', 'eceamazon');
     $mysqli->set_charset("utf8");
     $id = $_GET["id"];
     $requete = "SELECT * FROM Article WHERE ID=".$id;
              $resultat = $mysqli->query($requete);              
              while ($ligne = $resultat->fetch_assoc()) { 

              	$titre = $ligne['Titre'];
     			$description = $ligne['Description'];
     			$prix = $ligne['Prix'];
                $image = $ligne['URLimage'];
                $quantite = $ligne['Quantité'];
                $quantite2 = $ligne['Quantité'] - 1;
                $quantite3 = $ligne['Quantité'] + 1;

                    
                      //l'article est trouvé dans la base panier. On fait qté - 1 dans Article et qté + 1 dans panier
                        $requete2 = "SELECT * FROM panier WHERE ID=".$id;
                        $resultat2 = $mysqli->query($requete2);              
                        while ($ligne2 = $resultat2->fetch_assoc()) {

                            $qtepanier = $ligne2['Quantité'];
                            $qtepanier2 = $ligne2['Quantité'] + 1;

                            if ($quantite > 1){

                            	$sql3 = "UPDATE Article SET Quantité = '$quantite2'  WHERE ID =".$id;
                            	mysqli_query ($mysqli, $sql3) or die ('Erreur SQL !'.$sql3.'<br />'.mysqli_error($mysqli));
                      	
	
                            	$sql4 = "UPDATE panier SET Quantité = '$qtepanier2'  WHERE ID =".$id;
                            	mysqli_query ($mysqli, $sql4) or die ('Erreur SQL !'.$sql4.'<br />'.mysqli_error($mysqli));

                            }
                            if ($quantite == 1){

                            	$sql5 = "DELETE FROM Article WHERE ID =".$id;
                            	mysqli_query ($mysqli, $sql5) or die ('Erreur SQL !'.$sql5.'<br />'.mysqli_error($mysqli));
                      	
	
                            	$sql6 = "UPDATE panier SET Quantité = '$qtepanier2'  WHERE ID =".$id;
                            	mysqli_query ($mysqli, $sql6) or die ('Erreur SQL !'.$sql6.'<br />'.mysqli_error($mysqli));
                            	
                            }	
                        }

                    
                    
              
            }

             
           header('Location: ACHETEURpannier.php');

                     

   
       $mysqli->close();    
     
     //Requete SQL pour supprimer le contact dans la base
     //mysqli_query($mysqli, "INSERT INTO panier () VALUES (".$id.")");
     //Et la tu rediriges vers ta page contacts.php pour rafraichir la liste
     //echo 'Article ajouté au panier. Veuillez cliquez <a href="ACHETEURPageAccueil.php">ici</a> pour retourner à la page des articles';

     ?>