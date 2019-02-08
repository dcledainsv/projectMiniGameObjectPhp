<?php

	class Personnage
	{
		private $_pseudo = "Unknow"; // Par défaut
		private $_vieMax = 600;
		private $_manaMax = 360;
		private $_cooX = 5;
		private $_cooY = 5;

		// Les actions du joueur
			// Mouvement
				public function mouvementHaut()
				{
					$this->_cooX = $this->_cooX - 1;
				}

				public function mouvementBas()
				{
					$this->_cooX = $this->_cooX + 1;
				}

				public function mouvementGauche()
				{
					$this->_cooY = $this->_cooY - 1;
				}

				public function mouvementDroite()
				{
					$this->_cooY = $this->_cooY + 1;
				}

				public function grilleDeJeu($caseX, $caseY, $joueur)
				{
					$coordonnees = array("x" => $caseX,"y" => $caseY);

					echo '<div class="plateau">';

					// Création des coordonnées
						for($i = 0; $i < $caseX; $i++)
						{
							for($j = 0; $j < $caseY; $j++)
							{
								$coordonnees[$i][$j] = '<div class="cases"></div>';
							}
						}

					// Posirion actuelle du joueur

						$x = $joueur->_cooX;
						$y = $joueur->_cooY;
						$coordonnees[$x][$y] = '<div class="casesPosition"></div>';

						$eventX = 9;
						$eventY = 8;
						$coordonnees[$eventX][$eventY] = '<div class="casesEvent"></div>';

						if($coordonnees[$x][$y] === $coordonnees[$eventX][$eventY])
						{
							$coordonnees[$x][$y] = '<div class="casesEventWin"></div>';
						}
						else
						{

						}


					// Afficher les coordonnées
						for($i = 0; $i < $caseX; $i++)
						{
							for($j = 0; $j < $caseY; $j++)
							{
								echo $coordonnees[$i][$j];
							}
						}

					echo '</div>';
				}

			// Attaque simple
				public function attack($cibleAttack) // Attaque au corps à corps
				{
					echo '<p>' . $this->_pseudo . " a attaqué " . $cibleAttack->_pseudo . '</p>';
					$cibleAttack->_vieMax = $cibleAttack->_vieMax - 45;
				}

			// Sorts du joueur
				public function castBouleDeFeu($cibleAttack)
				{
					if ($this->_manaMax >= 46)
					{
						echo $this->_pseudo . " a lancé Boule de feu sur " . $cibleAttack->_pseudo . "<br />";
						$this->_manaMax = $this->_manaMax - 46;
						$cibleAttack->_vieMax = $cibleAttack->_vieMax - 102;
					}
					else
					{
						echo $this->_pseudo . " : vous n'avez pas assez de mana !" . "<br />";
					}
				}

				public function castEclaireDeGivre($cibleAttack)
				{
					if ($this->_manaMax >= 37)
					{
						echo $this->_pseudo . " a lancé Eclaire de givre sur " . $cibleAttack->_pseudo . "<br />";
						$this->_manaMax = $this->_manaMax - 37;
						$cibleAttack->_vieMax = $cibleAttack->_vieMax - 66;
					}
					else
					{
						echo $this->_pseudo . " : vous n'avez pas assez de mana !" . "<br />";
					}
				}

				public function castTraitChaos($cibleAttack)
				{
					if($this->_manaMax >= 72)
					{
						echo $this->_pseudo . " a lancé Traits de Chaos sur " . $cibleAttack->_pseudo . "<br />";
						$this->_manaMax = $this->_manaMax - 72;
						$cibleAttack->_vieMax = $cibleAttack->_vieMax - 92;
					}
					else
					{
						echo $this->_pseudo . " : vous n'avez pas assez de mana !" . "<br />";
					}
				}

				public function castSmallHeal() // Soin inférieur
				{
					
					if ($this->_manaMax >= 81)
					{
						echo $this->_pseudo . " s'est régéneré en utilisant Soin inférieur" . "<br />";

						$this->_vieMax = $this->_vieMax + 120;
						if ($this->_vieMax >= 600)
						{
							$this->_vieMax = 600;
						}
						$this->_manaMax = $this->_manaMax - 81;
					}
					else
					{
						echo $this->_pseudo . " : vous n'avez pas assez de mana !" . "<br />";
					}
				}


		// Statistiques du joueurs
			public function attribuerNom($nom)
			{
				$this->_pseudo = $nom;
			}

		// Affiche toute les information du personnage
			public function afficheInfo()
			{
				echo "<h2>" . $this->_pseudo . "</h2>";
				// Barre de vie
				echo '<div class="lifeBar">';
				echo '	<div id="jaugeVie"></div>';
				echo '	<span>' . '<span id="vieActuelle">' . $this->_vieMax . '</span>' . ' / 600</span>';
				echo '</div>';
				// Barre de mana
				echo '<div class="manaBar">';
				echo '	<div id="jaugeMana"></div>';
				echo '	<span>' . '<span id="manaActuelle">' . $this->_manaMax . '</span>' . ' / 360</span>';
				echo '</div>';
				echo "<p>Tu te situe aux coordonnées " . $this->_cooX . ";" . $this->_cooY . "</p><br />";
				echo "<hr />";
			}
	}
?>