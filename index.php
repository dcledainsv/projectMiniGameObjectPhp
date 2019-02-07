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


			$player1->castBouleDeFeu($player2);
			$player2->castEclaireDeGivre($player1);

			$player1->afficheInfo();
			$player2->afficheInfo();


		?>
	</body>
</html>