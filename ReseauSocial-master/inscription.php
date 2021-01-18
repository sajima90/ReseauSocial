<!DOCTYPE html>
<html>

    <head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="incript.css">
    <title>NetLand - inscription</title>

    </head>
    <body>
        
       
        <header class="header1">

            <div>
              <h1 class="title">NetLand</h1>
              <h4 class="title">Création de compte</h4>
           </div>

        </header>


         <div class="connexion">

            <div class="formulaire">

                <div class="titre">
                        <h3>Inscription à NetLand</h3>
                </div>
                
                 <form action="InscriptionCible.php" method="post">
                   <p>
                       
                <div class="pseudo">

                    <p>Pseudo</p>

                    <div class="input">
                        <img src="https://th.bing.com/th/id/OIP.6UvxQ_kPkwBV-zerxDw2nQHaHa?pid=Api&w=512&h=512&rs=1" alt="erreur d'image">
                        <input type="text" placeholder="Pseudo" name="pseudo" required >
                    </div>
                    
                </div>
                <div class="email">

                    <p>Email</p>
                    <div class="input">
                        <img src="https://image.freepik.com/free-icon/open-envelope-with-letter_318-32670.jpg" alt="erreur d'image">
                        <input type="email" placeholder="Email" name="email" required>
                    </div>

                </div>
                <div class="motdepasse">

                    <p>Mot de passe</p>
                    <div class="input">
                        <img src="https://image.freepik.com/free-icon/lock_318-41755.jpg" alt="erreur d'image">
                        <input type="password" placeholder="Mot de passe" name="password" required>
                    </div>

                </div>

                <div class="photop">
                    <img src="images/croixnoir.png" alt="erreur d'image" class="pp">
                </div>

                <div class="register">

                   <p class="ded">Accepter la Politique de confidentialité<input type="checkbox" required class="politique"></p>

                </div>

                <div class="con">
                    <input class="conn" type="submit" value="Valider" />
                </div>
                     
                <!-- <div class="compte">
                    <p>Dejà un compte ? <a href="index.php" class="f"> Connexion !</a><p>
                </div> -->

        </div>

        


         </div>
        
                       
       </p>
      </form>



         




    </body>


</html>
