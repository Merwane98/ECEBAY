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
              background-color: red;
       }
       #menuderoulant li:nth-child(2){
              background-color: #F9980C;
       }
       /* background des liens sous menus */
       #menuderoulant li:first-child li{
              background:red;
       }
       #menuderoulant li:nth-child(2) li{
              background:#F9980C;
       }
       
       /* background des liens menus et sous menus au survol */
       #menuderoulant li:first-child:hover, #menuderoulant li:first-child li:hover{
              background:red;
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
              background-color: green;
       }
       /* background des liens sous menus */
       #menuderoulantdroit li:first-child li{
              background:#F9980C;
       }
       #menuderoulantdroit li:nth-child(2) li{
              background:green;
       }
       
       /* background des liens menus et sous menus au survol */
       #menuderoulantdroit li:first-child:hover, #menuderoulantdroit li:first-child li:hover{
              background:#F9980C;
       }
       #menuderoulantdroit li:nth-child(2):hover, #menuderoulantdroit li:nth-child(2) li:hover{
              background:green;
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
              background-color: black;
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
              color: grey;
              text-align: center;
              width: auto;
              float: center;
              padding: 10px;
              height: 300px;
       } 
       #footer{
              background-color: black;
              color: white;
              clear: both;
              text-align: center;
              padding: 10px;
              position : bottom;
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
<?php
       $mail=$_SESSION['a'];
       $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
       $mysqli->set_charset("utf8");
       $requete = "SELECT * FROM Vendeur WHERE AdresseMail =  '$mail' ";
       $resultat = $mysqli->query($requete);              
       while ($ligne = $resultat->fetch_assoc()) 
       { ?>
       body{background-image:url("<?php echo $ligne['Fondecran']?>")}
       <?php
       }
              
       $mysqli->close();
       
?>                              
        </style>
</head>
<body>

       <div id="header">
              <a href="PageAccueil.php"><img class="logogauche" src="logodeconnexion1.png" alt="logosite" width="70" height="70"></a>
               <img class="logocentre" src="titresite1.png" alt="titre" width="300" height="100">
 <?php
       $mail=$_SESSION['a'];
       $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
       $mysqli->set_charset("utf8");
       $requete = "SELECT * FROM Vendeur WHERE AdresseMail =  '$mail' ";
       $resultat = $mysqli->query($requete);              
       while ($ligne = $resultat->fetch_assoc()) 
       { ?>
               <img class="logodroite" src="<?php echo $ligne['Photo']?>" alt="titre" width="150" height="150">
                              <div id="categoriegauche">    

               
              <tr>
                   <td><h2>Bonjour <?php echo $ligne['Civilite']?> <?php echo $ligne['Nom']?> <?php echo $ligne['Prenom']?>.</h2></td>                
                                                                                 
              </tr>
       <?php
       }
              
       $mysqli->close();
       
?>
       </div>
       


<div class="float">
       <ul id="menuderoulant">
        <li><a href="#">GERER LES ANNONCES</a>
              <ul>
                     <li><a href="Formulaire_Annonce_Vendeur.html">Ajouter une annonce</a></li>
                     <li><a href="pagevendeur.php">Liste de mes annonces</a></li>
              </ul>
       </li>
       
</ul>
</div>
<ul id="menuderoulantdroit">
       <li><a href="#">MON COMPTE</a>
              <ul>
                     <li><a href="pagecoordonnee_vendeur.php">Mes Informations</a></li>
                     <li><a href="mesannonces.php">Mes Annonces</a></li>
              </ul>
       </li>
       <li><a href="#">CONTACT</a>
              <ul>
                     <li><a href="aproposdenous_vendeur.php">A propos de nous</a></li>
                     <li><a href="pagecontact_vendeur.php">Nous contacter</a></li>
                     <li><a href="Formulaire_Probleme_Vendeur.html">Signaler un problème</a></li>
              </ul>

       </li>
</ul>
<div id="bande">
       </div>
<br>
<h2>Voici la liste de VOS annonces, vous pouvez les supprimer en cliquant sur "Supprimer" près de chaque annonce. </h2>
<?php
              $mail=$_SESSION['a'];
              $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
              $mysqli->set_charset("utf8");
              $requete = "SELECT * FROM Article WHERE Vendeur = '$mail' ";
              $resultat = $mysqli->query($requete);
              while ($ligne = $resultat->fetch_assoc()) {  

                     ?>
              <div id="bandearticle">
              <div id="articlegauche">
  

       <img src="<?php echo $ligne['URLimage']?>"height="200" width= "200"><br><br>
</div>
    
                            <tr>
                                   <td><h2><?php echo $ligne['Titre']?></h2><br></td>
                                   <td><u>Mode de vente :</u> <?php echo $ligne['Mode1']?> <?php echo $ligne['Mode2']?> <?php echo $ligne['Mode3']?><br></td>
                                   <td><u>Description :</u> <?php echo $ligne['Description']?><br></td>
                                   <td><small>Quantité : <?php echo $ligne['Quantité']?></small><br></td>
                                   <td><b>Prix : <?php echo $ligne['Prix']?> €</b><br></td>
                                   <td><u>Vendeur</u> : <?php echo $ligne['Vendeur']?><br></td>
                                   <td><u>Acheteur</u> : <?php echo $ligne['Acheteur']?><br></td>
                                   <td><a href="delete_annonce_vendeur.php?id=<?php echo $ligne['ID']?>">Supprimer</a></td>
                                   
                            
                            </tr>

                     </div>
                     <div id="bande">
       </div>
       
              <?php
              }
                     
              $mysqli->close();
       ?>
</p>

       </div>
       <div id="footer">
              Droit d'auteur | Copyright &copy; 2020, BR.Merwane & S.Louis-Henri
       </div>
</body>
</html>
