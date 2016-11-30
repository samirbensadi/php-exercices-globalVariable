<?php
session_start(); 

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['pays'] = $_POST['pays'];
$_SESSION['genre'] = $_POST['sexe'];
$_SESSION['film'] = $_POST['film']; 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>page2</title>
</head>
<body>

	<section>
		<p id="reponse">
			Salut <?php echo $_SESSION['nom'];?> !<br><br>
			Tu viens de <?php echo $_SESSION['pays']?>. <br>
			Tu es de sexe <?php echo $_SESSION['genre'] ?> <br>
			et je connais ton film favoris ! c'est:<br><br>
			"<?php echo $_SESSION['film']; ?>"<br><br>

		</p>
		<form action="index.php">
			<input id="retour" type="submit" name="Retour" value="Retour">
		</form>
	</section>

</body>
</html>