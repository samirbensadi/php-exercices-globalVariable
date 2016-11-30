<?php
session_start(); //on démarre la session AVANT toute chose

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Page 2</title>
	</head>
	<body>

	<p>Re-Bonjour !</p>

	<p>
		Je me souviens de toi !  tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> ! <br>
		et ton âge hummm...tu as <?php echo $_SESSION['age']; ?> ans !
	</p>

	<a href="index.php">Retour à la page précédente ?</a>





	</body>
</html>