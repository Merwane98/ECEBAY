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
              /* background des liens sous menus */
              #menuderoulant li:first-child li{
              background: red;
              }
              #menuderoulant li:nth-child(2) li{
              background: blue;
              }
              
              /* background des liens menus et sous menus au survol */
              #menuderoulant li:first-child:hover, #menuderoulant li:first-child li:hover{
              background: red;
              }
              #menuderoulant li:nth-child(2):hover, #menuderoulant li:nth-child(2) li:hover{
              background: blue;
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
              #bandemeteo{
                     background-color: white;
                     color: grey;
                     text-align: center;
                     width: auto;
                     float: right;
                     padding: 10px;
                     height: 300px;
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
              <a href="formulaireadmin.php"><img class="logogauche" src="logoadmin1.png" alt="logosite" width="70" height="70">
               <img class="logocentre" src="titresite1.png" alt="titre" width="300" height="150">
               <a href="PageAccueil.php"><img class="logodroite" src="retour.png" alt="retour" width="70" height="70"></a>
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
<div class="float">
<center><embed src="http://www.pageplugins.com/generators/ladybug_note/ladybugnote.swf" FlashVars="t=Bonjour à toi,&m=Nous te souhaitons BIENVENUE sur         ECEBAY !&f=BR.Merwane & S.Louis-Henri &px=41.45&py=53.1&n=2&dom" quality="high" wmode="transparent" width="380" height="260" name="Lady Bug Note" align="middle" allowScriptAccess="samedomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed><br><font size="2"></font></center>
</div>
<div class="float">
<div id="bandeacceuil">

       <h1>CATEGORIES</h1>
      <a href="Pageferaille.php"><img class="logocentre" src="tresor.png" alt="logosite" width="150" height="150"></a>
       <a href="Pagemusee.php"><img class="logocentre" src="musee.png" alt="logosite" width="150" height="150"></a>
       <a href="Pagevip.php"><img class="logocentre" src="vip.png" alt="logosite" width="150" height="150"></a>

       </div>
       </div>
<div id="bandemeteo">
       <div id="cont_NzUwNTZ8NXwxfDF8NHxmOTk2MGN8MXxGRkZGRkZ8Y3wx"><div id="spa_NzUwNTZ8NXwxfDF8NHxmOTk2MGN8MXxGRkZGRkZ8Y3wx"><a id="a_NzUwNTZ8NXwxfDF8NHxmOTk2MGN8MXxGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/paris_v75056/" target="_blank" style="color:#333;text-decoration:none;">Météo Paris</a> ©<a href="http://www.meteocity.com">meteocity.com</a></div><script type="text/javascript" src="http://widget.meteocity.com/js/NzUwNTZ8NXwxfDF8NHxmOTk2MGN8MXxGRkZGRkZ8Y3wx"></script></div>
</div>

</p>
</div>
<br>
       <div id="footer">
              Droit d'auteur | Copyright &copy; 2020, BR.Merwane & S.Louis-Henri
       </div>
</body>
</html>
