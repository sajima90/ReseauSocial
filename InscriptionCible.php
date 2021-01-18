<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. <?php echo $_POST['pseudo']; ?>
 Ton mot de passe est <?php echo $_POST['password']; ?> !
 ton adresse mail est <?php echo $_POST['email']; ?></p>

<p>Si tu veux changer de mot de passe, <a href="inscription.php">clique ici</a> pour revenir à la page formulaire.</p>


<?php
$monfichier = fopen('compteur.txt', 'r+');
 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 
fclose($monfichier);
 
echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>
