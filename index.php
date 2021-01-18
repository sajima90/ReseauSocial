<!DOCTYPE html>
<html>

    <head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style.css">
    <title>Neverland - connexion</title>
    <script type="text/javascript">
	window.onload=function() {
		horloge('date_heure');
	};
			function date_heure(id){
        date = new Date;
        annee = date.getFullYear();
        moi = date.getMonth();
        mois = new Array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
        j = date.getDate();
        jour = date.getDay();
        jours = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
        h = date.getHours();
        if(h<10)
        {
          h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
          m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
          s = "0"+s;
        }
        resultat = 'Nous sommes le '+jours[jour]+' '+j+' '+mois[moi]+' '+annee+' il est '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = resultat;
        setTimeout('date_heure("'+id+'");','1000');
        return true;
			}
		</script>


		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </head>
    <body>

        
       
        <header class="header1">

            <div>
              <h1 class="title">Neverland</h1>
              <h4 class="title">Connexion</h4>
              

           </div>

        </header>

         <div class="connexion">

            <div class="formulaire">

                <div class="titre">
                        <h3>Connexion Neverland</h3>
                </div>
                <!-- <div class="pseudo">

                    <p>Pseudo</p>

                    <div class="input">
                        <img src="https://th.bing.com/th/id/OIP.6UvxQ_kPkwBV-zerxDw2nQHaHa?pid=Api&w=512&h=512&rs=1" alt="erreur d'image">
                        <input type="text" placeholder="Pseudo">
                    </div>
                    
                </div> -->
		<ul class="headCenter" id="date_heure"></ul>
		<span id="date_heure"></span>
		<script type="text/javascript">window.onload = date_heure('date_heure');</script>
                <div class="email">

                    <p>Email</p>
                    <div class="input">
                        <img src="https://image.freepik.com/free-icon/open-envelope-with-letter_318-32670.jpg" alt="erreur d'image">
                        <input type="email" placeholder="Email">
                    </div>

                </div>
                <div class="motdepasse">

                    <p>Mot de passe</p>
                    <div class="input">
                        <img src="https://image.freepik.com/free-icon/lock_318-41755.jpg" alt="erreur d'image">
                        <input type="password" placeholder="Mot de passe">
                    </div>

                </div>

                <div class="con">
                    <button class="conn">Envoyer</button>
                </div>

                <div class="register">

                    <p>Pas de compte ? <a href="inscription.html" class="f"> Inscrivez vous !</a><p>

                </div>
	<?php
	$age_du_visiteur = 17;
	echo "Le visiteur a $age_du_visiteur ans";
	?>



        </div>

         </div>

        

    </body>


</html>
