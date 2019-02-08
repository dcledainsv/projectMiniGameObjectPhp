<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Accueil</title>
	</head>

	<body>
		<?php include("class/personnage.php"); ?>

		<?php
			$player1 = new Personnage();
			$player2 = new Personnage();

			// Attribuer un nom aux personnages
			$player1->attribuerNom("Anozys");
			$player2->attribuerNom("Canelle");

			$player2->attack($player1);


			$player1->afficheInfo();
			$player2->afficheInfo();

		?>


		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>