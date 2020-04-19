<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
       <meta charset="utf-8">
       <title>ECEBAY</title>
       <style type="text/css">
                            #menuderoulant, #menuderoulant ul{
              padding:0px;
              margin:0px;
              list-style:none;
              text-align:left;
              }
              #menuderoulant li{
              display:inline-block;
              position:relative;
              border-radius:30px 30px 0 0;
              }
              #menuderoulant ul li{
              display:inherit;
              border-radius:0;
              text-align:center;

              }
              #bandearticle{ 
                     background-color: grey;
                     color: black;
                     clear: both;
                     text-align: left;
                     padding: 10px;
                     }
#articlegauche {
                      float: left;
                     padding-right: 30px;
                     }      
              
              #menuderoulant ul{
              position:absolute;
              z-index: 1000;
              max-height:0;
              left: 0;
              right: 0;
              overflow:hidden;
              -moz-transition: .8s all .3s;
              -webkit-transition: .8s all .3s;
              transition: .8s all .3s;
              }
              #menuderoulant li:hover ul{
              max-height:15em;
              }
              /* background des liens menus */
              #menuderoulant li:first-child{
              background-color: #F9980C;
              }
              #menuderoulant li:nth-child(2){
              background-color: #F9980C;
              }
              /* background des liens sous menus */
              #menuderoulant li:first-child li{
              background:#F9980C;
              }
              #menuderoulant li:nth-child(2) li{
              background:#F9980C;
              }
              
              /* background des liens menus et sous menus au survol */
              #menuderoulant li:first-child:hover, #menuderoulant li:first-child li:hover{
              background:#F9980C;
              }
              #menuderoulant li:nth-child(2):hover, #menuderoulant li:nth-child(2) li:hover{
              background:#F9980C;
              }
              
              /* les a href */
              #menuderoulant a{
              text-decoration:none;
              display:block;
              padding:8px 32px;
              color:#fff;
              font-family:arial;
              }
              #menuderoulant ul a{
              padding:8px 0;
              }
              #menuderoulant li:hover li a{
              color:#fff;
              text-transform:inherit;
              }
              #menuderoulant li:hover a, #menuderoulant li li:hover a{
              color:#000;
              }
              #menuderoulantdroit, #menuderoulantdroit ul{
              padding:0px;
              margin:0px;
              list-style:none;
              text-align:right;
              }
              #menuderoulantdroit li{
              display:inline-block;
              position:relative;
              border-radius:30px 30px 0 0;
              }
              #menuderoulantdroit ul li{
              display:inherit;
              border-radius:0;
              text-align:center;

              }
              
              #menuderoulantdroit ul{
              position:absolute;
              z-index: 1000;
              max-height:0;
              left: 0;
              right: 0;
              overflow:hidden;
              -moz-transition: .8s all .3s;
              -webkit-transition: .8s all .3s;
              transition: .8s all .3s;
              }
              #menuderoulantdroit li:hover ul{
              max-height:15em;
              }
              /* background des liens menus */
              #menuderoulantdroit li:first-child{
              background-color: #F9980C;
              }
              #menuderoulantdroit li:nth-child(2){
              background-color: #F9980C;
              }
              /* background des liens sous menus */
              #menuderoulantdroit li:first-child li{
              background:#F9980C;
              }
              #menuderoulantdroit li:nth-child(2) li{
              background:#F9980C;
              }
              
              /* background des liens menus et sous menus au survol */
              #menuderoulantdroit li:first-child:hover, #menuderoulantdroit li:first-child li:hover{
              background:#F9980C;
              }
              #menuderoulantdroit li:nth-child(2):hover, #menuderoulantdroit li:nth-child(2) li:hover{
              background:#F9980C;
              }
              
              /* les a href */
              #menuderoulantdroit a{
              text-decoration:none;
              display:block;
              padding:8px 32px;
              color:#fff;
              font-family:arial;
              }
              #menuderoulantdroit ul a{
              padding:8px 0;
              }
              #menuderoulantdroit li:hover li a{
              color:#fff;
              text-transform:inherit;
              }
              #menuderoulantdroit li:hover a, #menuderoulantdroit li li:hover a{
              color:#000;
              }
              #header{
                     background-color: white;
                     color: grey;
                     text-align: center;
                     padding: 5px;
                     } 
              #nav{
                     line-height: 30px;
                     background-color: #eeeeee;
                     height: 100px;
                     width: 1550px;
                     float: left;
                     padding: 5px;
                     } 
              #bande{
                     line-height: 30px;
                     background-color: #F9980C;
                     height: 2px;
                     width: auto;
                     float: center;
                     padding: 5px;
                     } 
              #section{
                     background-color: #cccccc;
                     width: auto;
                     float: left;
                     padding: 5px;
                     height: 550px;
                     } 
              #bandeacceuil{
                     background-color: white;
                     color: #F9980C;
                     text-align: center;
                     width: auto;
                     float: center;
                     padding: 10px;
                     height: 300px;
                     } 
              #footer{
                     background-color: #F9980C;
                     color: white;
                     clear: both;
                     text-align: center;
                     padding: 10px;
                     }
              #categoriegauche{
                     background-color: white;
                     color: grey;
                     text-align: left;
                     padding: 5px;
                     } 
              #categoriedroite{
                     background-color: white;
                     color: grey;
                     text-align: right;
                     padding: 5px;
                     } 
              .logogauche {
                      float: left;
                     padding-right: 30px;
                     }      
              .logodroite {
                      float: right;
                     padding-right: 5px;
                     }      
              .logocentre {
                      float: center;
                     padding-right: 5px;
                     }      
              div.float {
                                    float: left;
                                   }
        </style>
</head>

 <?php
    $civilite = isset($_POST["civilite"])?$_POST["civilite"] : ""; //if then else
    $nom = isset($_POST["nom"])?$_POST["nom"] : "";
    $prenom = isset($_POST["prenom"])?$_POST["prenom"] : "";
    $telephone = isset($_POST["telephone"])?$_POST["telephone"] : "";
    $adresse = isset($_POST["adresse"])?$_POST["adresse"] : "";
    $cpostal = isset($_POST["cpostal"])?$_POST["cpostal"] : "";
    $ville = isset($_POST["ville"])?$_POST["ville"] : "";
    $mail1 = isset($_POST["mail1"])?$_POST["mail1"] : "";
    $mdp1 = isset($_POST["mdp1"])?$_POST["mdp1"] : "";
    $cb = isset($_POST["cb"])?$_POST["cb"] : "";
    $carte = isset($_POST["carte"])?$_POST["carte"] : "";
    $nomcarte = isset($_POST["nomcarte"])?$_POST["nomcarte"] : "";
    $expdate = isset($_POST["expdate"])?$_POST["expdate"] : "";
    $codesecu = isset($_POST["codesecu"])?$_POST["codesecu"] : "";
    $IDannonce = isset($_POST["IDannonce"])?$_POST["IDannonce"] : "";
 $erreur = "";
    if($civilite == ".") {$erreur .= "<p><b>Le champ Civilité est vide. Merci de le renseigner.</b><br></p>";}
    if($IDannonce == ".") {$erreur .= "<p><b>Le champ ID de l'annonce est vide. Merci de le renseigner.</b><br></p>";}
    if($nom == "") {$erreur .= "<p><b>Le champ Nom est vide. Merci de le remplir.</b><br></p>";}
    if($prenom == "") {$erreur .= "<p><b>Le champ Prénom est vide. Merci de le renseigner.</b><br></p>";}
    if($telephone == "") {$erreur .= "<p><b>Le champ Telephone est vide. Merci de le renseigner.</b><br></p>";}
    if($adresse == "") {$erreur .= "<p><b>Le champ Adresse est vide. Merci de le renseigner.</b><br></p>";}
    if($cpostal == "") {$erreur .= "<p><b>Le champ Code postal est vide. Merci de le renseigner.</b><br></p>";}
    if($ville == "") {$erreur .= "<p><b>Le champ Ville est vide. Merci de le renseigner.</b><br></p>";}
    if($mail1 == "") {$erreur .= "<p><b>Le champ Adresse est vide. Merci de le renseigner.</b><br></p>";}
    if($mdp1 == "") {$erreur .= "<p><b>Le champ Mot de passe est vide. Merci de le renseigner.</b><br></p>";}
    if($cb == "") {$erreur .= "<p><b>Le champ Numéro de carte banciare est vide. Merci de le renseigner.</b><br></p>";}
    if($carte == "") {$erreur .= "<p><b>Le champ Type de carte banciare est vide. Merci de le renseigner.</b><br></p>";}
    if($nomcarte == "") {$erreur .= "<p><b>Le champ Nom affiché sur la carte banciare est vide. Merci de le renseigner.</b><br></p>";}
    if($expdate == "") {$erreur .= "<p><b>Le champ Date d'expiration de la carte banciare est vide. Merci de le renseigner.</b><br></p>";}
    if($codesecu == "") {$erreur .= "<p><b>Le champ Code de sécurité est vide. Merci de le renseigner.</b><br></p>";}
    if ($erreur == "") 
    {
        echo '<td><img src="titresite1.png" width="300" height="100"></td>';
        echo '<td><a href="ACHETEURPageAccueil.php"><img  class="logodroite" src="retour.png" width="150" height="150" border="10"> </a></td>'; 
        echo "<p><b> ".$civilite." ".$nom." ".$prenom.", nous vous informons que la commande concernant les articles suivant vient d'être prise en charge. <br>Vous la recevrez sous 4 jours ouvrés.</b></p>";
   

        $mail=$_SESSION['a'];
        $somme = 0;
        $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
        $mysqli->set_charset("utf8");

        $requete = "SELECT * FROM moffre WHERE IDacheteur='$mail1' AND IDannonce=".$IDannonce;
        $resultat = $mysqli->query($requete);
        ?><td>Votre commande N° : M<?php echo rand(2390470, 510934);?></td><?php
        while ($ligne = $resultat->fetch_assoc()) {  
                      $Proposition = $ligne['Proposition'];
                      
                     
        ?>


        <div id="bandearticle">
            <div id="articlegauche">
                     
            </div>
    
            <tr>
                   <td><h2>ID annonce : <?php echo $ligne['IDannonce']?></h2><br></td>
                   <td>Vendeur : <?php echo $ligne['IDvendeur']?><br></td>
                   <td><b>Prix : <?php echo $ligne['Proposition']?> €</b><br></td>
            </tr>
        </div>
        <div id="bande">
        </div>
        <div id="bande">
        </div>
        <div id="bande">
        </div>
       
       
              <?php
             $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
              $mysqli->set_charset("utf8");

        $requete1 = "SELECT Proposition FROM moffre WHERE IDacheteur='$mail1' AND IDannonce=".$IDannonce;
        $resultat = $mysqli->query($requete1);
        
        while ($ligne = $resultat->fetch_assoc()) {  
                      $Proposition = $ligne['Proposition'];}
                      
              
        }//end while ligne
        
$requete2 = "SELECT Quantité FROM Article WHERE ID=".$IDannonce;
        $resultat = $mysqli->query($requete2);
        
        while ($ligne = $resultat->fetch_assoc()) {  
                      $Quantité = $ligne['Quantité'];}
        
$sql = "DELETE FROM moffre WHERE IDacheteur='$mail1' AND IDannonce=".$IDannonce;
        mysqli_query($mysqli, $sql);
        $sql = "DELETE FROM panier WHERE ID=".$IDannonce;
        mysqli_query($mysqli, $sql);
            
        $sql = "UPDATE Article SET Quantité = '$Quantité'- 1 WHERE ID".$IDannonce;
        mysqli_query($mysqli, $sql);

        if ($Quantité==0){$sql3 = "DELETE FROM article WHERE ID=".$IDannonce;
        mysqli_query($mysqli, $sql3);}
        
        ?>
        <tr>
              <td>
                    <big><big><u>Total commande</u> : <?php echo $Proposition?> €</big></big> 
              </td>
              </tr>
        <?php
        $mysqli->close();
    }

    
    

    else {
            echo "Erreur : $erreur";
    }
 
?>