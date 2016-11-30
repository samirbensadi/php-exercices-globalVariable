<?php
//on demarre la session pour l'exercice 2
session_start(); 

//on crée les variables de sessions

$_SESSION['prenom'] = 'Samir';
$_SESSION['nom'] = 'Ben sadi'; 
$_SESSION['age'] = 30; 

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>php-exos-globalVariable</title>
	</head>

	<body>
<p>
<?php
//exercice 1:
$ipAdress = $_SERVER['REMOTE_ADDR'];
echo "ton adresse IP est : ". $ipAdress; 

	echo "<br>";

$userEnv = $_SERVER['HTTP_USER_AGENT']; 
echo "Ton User Agent est : " . $userEnv;

	echo "<br>";

$serverName = $_SERVER['SERVER_NAME'];
echo "le nom de ton server est : ". $serverName;
  ?>
</p>
<!-- =============== exercice 2 =========================== =========================================================== -->
<p>
	Salut <?php echo $_SESSION['prenom'];?> !<br>
	Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ? 
</p>

<p>
	<a href="page2.php">Lien vers l'autre page !</a>
</p>


	</body>
</html>