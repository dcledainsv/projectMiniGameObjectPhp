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
			$joueur1 = new Personnage();
			$joueur2 = new Personnage();

			$grille = new Personnage(); // Ajout du plateau de jeu

			// Attribuer un nom aux personnages
			$joueur1->attribuerNom("Anozys");
			$joueur2->attribuerNom("Natsu");

			?>

			<div class="afficheAllActions">

				<p class="actions">Actions effectuées</p>

				<?php
				// actions joueur

					$joueur1->mouvementDroite();
					$joueur1->mouvementDroite();
					$joueur1->mouvementDroite();

					$joueur1->mouvementBas();
					$joueur1->mouvementBas();
					$joueur1->mouvementBas();
					$joueur1->mouvementBas();
				?>
			
			</div>






		



		<!-- Affiche les stats -->
		<div class="statistiquesPerso">
			<div><?php $joueur1->afficheInfo(); ?></div>
			<div><?php $joueur2->afficheInfo(); ?></div>
		</div>

		<?php

			$grille->grilleDeJeu(12,12, $joueur1);
		?>


		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>