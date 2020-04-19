<?php
session_start();
?>
<?php
     $mail=$_SESSION['a'];
     $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
     $mysqli->set_charset("utf8");
     //Tu recuperes l'id du contact
     $id = $_GET["id"];
     
      

     $requete = "SELECT * FROM Article WHERE ID=".$id;
              $resultat = $mysqli->query($requete);              
              while ($ligne = $resultat->fetch_assoc()) { 

              	$titre = $ligne['Titre'];
                $Mode1 = $ligne['Mode1'];
                $Mode2 = $ligne['Mode2'];
                $Mode3 = $ligne['Mode3'];
     			$description = $ligne['Description'];
     			$prix = $ligne['Prix'];
                $image = $ligne['URLimage'];
                $vendeur = $ligne['Vendeur'];
                $quantite = $ligne['Quantité'];
                $quantite2 = $ligne['Quantité'] - 1;
                $quantite3 = $ligne['Quantité'] + 1;
                $prixmax2 = $ligne['PrixMax2'];
              	$sql2 = "SELECT * FROM panier";
                    if ($id != "") {
                        //on cherche le livre avec les paramètres titre et auteur
                        $sql2 .= " WHERE ID='$id'";
                      }
                    $result = mysqli_query($mysqli, $sql2);
                    if (mysqli_num_rows($result) == 0) {
                        //le livre recherché n'existe pas
                        echo "Erreur de connexion";
                        $sql = "INSERT INTO panier VALUES ($id, '$titre','$Mode1','$Mode2','$Mode3', '$image', '$description', 1, $prix, '$vendeur', '$mail','$prixmax2','Aucune')";
                        mysqli_query ($mysqli, $sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($mysqli));
                        

                        $sql1 = "UPDATE Article SET Quantité = '$quantite2'  WHERE ID =".$id;
                        mysqli_query ($mysqli, $sql1) or die ('Erreur SQL !'.$sql1.'<br />'.mysqli_error($mysqli));
                        
                      }

                    else {
                      //l'article est trouvé dans la base panier. On fait qté - 1 dans Article et qté + 1 dans panier
                        $requete2 = "SELECT * FROM panier WHERE ID=".$id;
                        $resultat2 = $mysqli->query($requete2);              
                        while ($ligne2 = $resultat2->fetch_assoc()) {

                            $qtepanier = $ligne2['Quantité'];
                            $qtepanier2 = $ligne2['Quantité'] + 1;

                            $sql3 = "UPDATE Article SET Quantité = '$quantite2'  WHERE ID =".$id;
                            mysqli_query ($mysqli, $sql3) or die ('Erreur SQL !'.$sql3.'<br />'.mysqli_error($mysqli));
                      

                            $sql4 = "UPDATE panier SET Quantité = '$qtepanier2'  WHERE ID =".$id;
                            mysqli_query ($mysqli, $sql4) or die ('Erreur SQL !'.$sql4.'<br />'.mysqli_error($mysqli));
                        }

                    }
                    
              
            }

             
            header('Location: ACHETEURPageAccueil.php');

                     

   
       $mysqli->close();    
     
     //Requete SQL pour supprimer le contact dans la base
     //mysqli_query($mysqli, "INSERT INTO panier () VALUES (".$id.")");
     //Et la tu rediriges vers ta page contacts.php pour rafraichir la liste
     //echo 'Article ajouté au panier. Veuillez cliquez <a href="ACHETEURPageAccueil.php">ici</a> pour retourner à la page des articles';

     ?>

     