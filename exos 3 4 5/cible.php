<?php
setcookie('pseudo', $_POST['login'], time() + 365*32*3600); 
setcookie('password', $_POST['mdp'], time() + 365*32*3600);
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cible</title>
</head>
<body>

<p>
	Ton Login est : <?php echo $_COOKIE['pseudo'];  ?> <br>
	Ton mot de passe est :  <?php echo $_COOKIE['password'] ?>
</p>

<a href="index.php"> retour arrière</a>

</body>
</html>