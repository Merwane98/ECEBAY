<?php 
session_start();
?>

<?php
     $mail=$_SESSION['a'];
     $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
     $mysqli->set_charset("utf8");
     $id = $_GET["id"];
     $requete = "SELECT * FROM Article WHERE ID=".$id;
              $resultat = $mysqli->query($requete);              
              while ($ligne = $resultat->fetch_assoc()) { 

              	$type = $ligne['Type'];
                $titre = $ligne['Titre'];
     			$description = $ligne['Description'];
     			$prix = $ligne['Prix'];
                $image = $ligne['URLimage'];
                $vendeur = $ligne['Vendeur'];
                $quantite = $ligne['Quantité'];
                $quantite2 = $ligne['Quantité'] - 1;
                $quantite3 = $ligne['Quantité'] + 1;

                    
                    //l'article est trouvé dans la base panier. On fait qté - 1 dans Article et qté + 1 dans panier
                    $requete2 = "SELECT * FROM panier WHERE ID=".$id;
                    $resultat2 = $mysqli->query($requete2);              
                    while ($ligne2 = $resultat2->fetch_assoc()) {

                        $qtepanier = $ligne2['Quantité'];
                        $qtepanier2 = $ligne2['Quantité'] + 1;
                        $qtepanier3 = $ligne2['Quantité'] - 1;
                        $sql="SELECT * FROM Article WHERE ID=".$id;
                        $result = mysqli_query($mysqli, $sql);
                        if (mysqli_num_rows($result) == 0){
                            //si l'article a été supprimer de la table Article, on diminue panierqté de 1 et on insl'article dans la table arti
                            $sql0 = "UPDATE panier SET Quantité = '$qtepanier3'  WHERE ID =".$id;
                            mysqli_query ($mysqli, $sql0) or die ('Erreur SQL !'.$sql0.'<br />'.mysqli_error($mysqli));
                            
                            $sql00 = "INSERT INTO Article VALUES (0, '$type', '$titre', '$description', 1, $prix, '$image', '$vendeur')";
                            mysqli_query($mysqli, $sql00) or die ('Erreur SQL !' .$sql00.'<br />'.mysqli_erro($mysqli));
                        }//end if
                        
                        
                        else {
                            //si l'article existe encore dans la table Article

                            $sql3 = "UPDATE Article SET Quantité = '$quantite3'  WHERE ID =".$id;
                            mysqli_query ($mysqli, $sql3) or die ('Erreur SQL !'.$sql3.'<br />'.mysqli_error($mysqli));
                      

                            $sql4 = "UPDATE panier SET Quantité = '$qtepanier3'  WHERE ID =".$id;
                            mysqli_query ($mysqli, $sql4) or die ('Erreur SQL !'.$sql4.'<br />'.mysqli_error($mysqli));
                        }//end else

                            
                                         
                    }//end while ligne2
            }//end while ligne

          
            header('Location: ACHETEURpannier.php');

                     

   
       $mysqli->close();    
     
     ?>
