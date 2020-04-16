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
              background-color: blue;
              }
              #menuderoulant li:nth-child(3){
              background-color: #ffcc33;
              }
              /* background des liens sous menus */
              #menuderoulant li:first-child li{
              background: red;
              }
              #menuderoulant li:nth-child(2) li{
              background: blue;
              }
              #menuderoulant li:nth-child(3) li{
              background: #ffcc33;
              }
              
              /* background des liens menus et sous menus au survol */
              #menuderoulant li:first-child:hover, #menuderoulant li:first-child li:hover{
              background: red;
              }
              #menuderoulant li:nth-child(2):hover, #menuderoulant li:nth-child(2) li:hover{
              background: blue;
              }
               #menuderoulant li:nth-child(3):hover, #menuderoulant li:nth-child(3) li:hover{
              background: #ffcc33;
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
              background: #ffcc33;
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
              color: #fff;
              text-transform:inherit;
              }
              #menuderoulantdroit li:hover a, #menuderoulantdroit li li:hover a{
              color: #000;
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
              #bandegrise{
                     line-height: 30px;
                     background-color: grey;
                     height: 6px;
                     width: auto;
                     float: center;
                     padding: 5px;
                     } 
              #section{
                     background-color: #cccccc;
                     width: auto
                     float: left;
                     padding: 5px;
                     height: 550px;
                     } 
              #footer{
                     background-color: black;
                     color: white;
                     clear: both;
                     text-align: center;
                     padding: 10px;
                     }
               #bandearticle{
                     background-color: grey;
                     color: black;
                     clear: both;
                     text-align: left;
                     padding: 10px;
                     }
              #couleurtitre{
                     background-color: grey;
                     color:#F9980C;
                     clear: both;
                     text-align: left;
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
              #articlegauche {
                      float: left;
                     padding-right: 30px;
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
              <a href="PageAccueil.php"><img class="logogauche" src="logodeconnexion1.png" alt="logosite" width="70" height="70"></a>
               <img class="logocentre" src="logoadministrateur1.png" alt="titre" width="600" height="70">
       </div>
       


<div class="float">
       <ul id="menuderoulant">
       <li><a href="#">GERER LES ANNONCES</a>
              <ul>
                     <li><a href="Formulaire_Annonce_Administrateur.html">Ajouter une annonce</a></li>
                     <li><a href="listetousarticle.php">Supprimer une annonce</a></li>
              </ul>
       </li>
       <li><a href="#">GERER LES VENDEURS</a>
              <ul>
                     <li><a href="Formulaire_Inscription_vendeur_administrateur.html">Ajouter un vendeur</a></li>
                     <li><a href="listetousvendeur.php">Supprimer un vendeur</a></li>
              </ul>

       </li>
       
</ul>
</div>
<br><br>
<div id="bande">
       </div>
<h2>Voici la liste de toutes les annonces, vous pouvez les supprimer en cliquant sur "Supprimer" près de chaque annonce. </h2>

<?php
              $mysqli = new mysqli('localhost', 'root', '', 'ecebay');
              $mysqli->set_charset("utf8");
              $requete = 'SELECT * FROM Article ';
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
                            <td><u>Description</u> :<?php echo $ligne['Description']?><br></td>
                            <td><small>Quantité : <?php echo $ligne['Quantité']?></small><br></td>
                            <td><b>Prix : <?php echo $ligne['Prix']?> €</b><br></td>
                            <td><u>Vendeur</u> : <?php echo $ligne['Vendeur']?><br></td>
                            <td> <div id="bandegrise"><br></div></td>
                            <td><a href="delete.php?id=<?php echo $ligne['ID']?>">Supprimer</a></td>
                                   
                            
                     </tr>
 </div>
                     <div id="bande">
       </div>
       
                     
       
              <?php
              }
                     
              $mysqli->close();
       ?>


       <div id="footer">
             Droit d'auteur | Copyright &copy; 2020, BR.Merwane & S.Louis-Henri
       </div>
</body>
</html>

<a href="?action=supprimer">Supprimer un article</a>
