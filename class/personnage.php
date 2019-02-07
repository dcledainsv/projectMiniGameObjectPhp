<?php

	class Personnage
	{
		private $_pseudo = "Unknow"; // Par défaut
		private $_cooX = 0;
		private $_cooY = 0;
		private $_vieMax = 600;
		private $_manaMax = 360;

		// Les actions du joueur
			// Mouvement
				public function mouvementHaut()
				{
					$this->_cooY = $this->_cooY + 1;
				}

				public function mouvementBas()
				{
					$this->_cooY = $this->_cooY - 1;
				}

				public function mouvementGauche()
				{
					$this->_cooX = $this->_cooX - 1;
				}

				public function mouvementDroite()
				{
					$this->_cooX = $this->_cooX + 1;
				}

			// Attaque simple
				public function attack($cibleAttack) // Attaque au corps à corps
				{
					echo $this->_pseudo . " a attaqué " . $cibleAttack->_pseudo;
					$cibleAttack->_vieMax = $cibleAttack->_vieMax - 45;
				}

			// Sorts du joueur
				public function castBouleDeFeu($cibleAttack)
				{
					echo $this->_pseudo . " a lancé Boule de feu sur " . $cibleAttack->_pseudo . "<br />";
					$this->_manaMax = $this->_manaMax - 46;
					$cibleAttack->_vieMax = $cibleAttack->_vieMax - 102;
				}

				public function castEclaireDeGivre($cibleAttack)
				{
					echo $this->_pseudo . " a lancé Eclaire de givre sur " . $cibleAttack->_pseudo . "<br />";
					$this->_manaMax = $this->_manaMax - 37;
					$cibleAttack->_vieMax = $cibleAttack->_vieMax - 66;
				}


		// Statistiques du joueurs
			public function attribuerNom($nom)
			{
				$this->_pseudo = $nom;
			}

		// Affiche toute les information du personnage
		public function afficheInfo()
		{
			echo "<h2>Statistiques de " . $this->_pseudo . "</h2>";
			echo "Vie : " . $this->_vieMax . " / 600" . "<br />" ;
			echo "Mana : " . $this->_manaMax . " / 360" . "<br />";
			echo "Tu te situe aux coordonnées " . $this->_cooX . ";" . $this->_cooY . "<br />";
			echo "<hr />";
		}
	}
?>