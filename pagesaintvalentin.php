<!DOCTYPE html>
<html>
<head>
       <meta charset="utf-8">
       <title>ECEBAY PROMOTIONS</title>
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
              background-color:red;
              }
              #menuderoulant li:nth-child(2){
              background-color:blue;
              }
              /* background des liens sous menus */
              #menuderoulant li:first-child li{
              background:red;
              }
              #menuderoulant li:nth-child(2) li{
              background:blue;
              }
              
              /* background des liens menus et sous menus au survol */
              #menuderoulant li:first-child:hover, #menuderoulant li:first-child li:hover{
              background:red;
              }
              #menuderoulant li:nth-child(2):hover, #menuderoulant li:nth-child(2) li:hover{
              background:blue;
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
              background-color: #ffcc33;
              }
              #menuderoulantdroit li:nth-child(2){
              background-color: green;
              }
              /* background des liens sous menus */
              #menuderoulantdroit li:first-child li{
              background:#ffcc33;
              }
              #menuderoulantdroit li:nth-child(2) li{
              background:green;
              }
              
              /* background des liens menus et sous menus au survol */
              #menuderoulantdroit li:first-child:hover, #menuderoulantdroit li:first-child li:hover{
              background:#ffcc33;
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
                     background-color: white;
                      color:black; 
                     width: auto:;
                     float: center;
                     text-align: center;
                     padding: 5px;
                     height: 100px;
                     } 
              #footer{
                     background-color: black;
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
<body>
      <div id="header">
              <a href="formulaireadmin.php"><img class="logogauche" src="logoadmin.png" alt="logosite" width="50" height="50"></a>
               <img class="logocentre" src="logopromotion.png" alt="titre" width="500" height="100">
               <a href="PageAccueil.php"><img class="logodroite" src="retour.png" alt="retour" width="50" height="50"></a>
       </div>
       


<div class="float">
       <ul id="menuderoulant">
<li><a href="#">CATEGORIES</a>
              <ul>
                     <li><a href="Pageferaille.php">Féraille ou Trésor</a></li>
                     <li><a href="Pagemusee.php">Bon pour le Musée</a></li>
                     <li><a href="Pagevip.php">Accessoire VIP</a></li>
              </ul>
       </li>
       <li><a href="#">PROMOTIONS</a>
              <ul>
                     <li><a href="pageventeflash.php">Ventes FLASH</a></li>
                     <li><a href="pagesaintvalentin.php">Saint Valentin</a></li>
                     <li><a href="pagenoel.php">Noël</a></li>
                     <li><a href="pageperemere.php">Fête des pères/mères</a></li>
              </ul>

       </li>
       
</ul>
</div>
<ul id="menuderoulantdroit">
       <li><a href="#">MON COMPTE</a>
              <ul>
                     <li><a href="Formulaire_Connexion.html">Connexion</a></li>
                     <li><a href="Formulaire_Inscription_choix.html">Inscription</a></li>
              </ul>
       </li>
       <li><a href="#">CONTACT</a>
              <ul>
                     <li><a href="aproposdenous.php">A propos de nous</a></li>
                     <li><a href="pagecontact.php">Nous contacter</a></li>
                     <li><a href="Formulaire_Probleme.html">Signaler un problème</a></li>
              </ul>

       </li>
</ul>
<div id="bande">
       </div>
<div id="section"> 




<img class="logocentre" src="saintvalentin.gif" alt="titre" width="70" height="100">
<img class="logocentre" src="saintvalentin2.gif" alt="titre" width="600" height="100">
<img class="logocentre" src="saintvalentin.gif" alt="titre" width="70" height="100">








</div>
</p>
<?php
              $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
              $mysqli->set_charset("utf8");
              $requete = 'SELECT * FROM Article WHERE Type LIKE "%SV" ';
              $resultat = $mysqli->query($requete);
              while ($ligne = $resultat->fetch_assoc()) {  

                     ?>
              <div id="bandearticle">
              <div id="articlegauche">
  

       <img src="<?php echo $ligne['URLimage']?>"height="200" width= "200"><br><br>


</div>
    
                            <tr>
                                   <td><h2><?php echo $ligne['Titre']?></h2><br></td>
                                   <td><u>Description</u> :<?php echo $ligne['Description']?><br></td>
                                   <td><small>Quantité : <?php echo $ligne['Quantité']?></small><br></td>
                                   <td><b>Prix : <?php echo $ligne['Prix']?> €</b><br></td>
                                   <td><u>Vendeur</u> : <?php echo $ligne['Vendeur']?><br></td>
                                   
                                   <td> <div id="bandegrise"><br></div><br></td>
                            
                            </tr>

                     </div>
                     <div id="bande">
       </div>
       
              <?php
              }
                     
              $mysqli->close();
       ?>
       </div>
       <div id="footer">
              Droit d'auteur | Copyright &copy; 2020, BR.Merwane & S.Louis-Henri
       </div>
</body>
</html>