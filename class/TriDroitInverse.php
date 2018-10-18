<?php


class TriDroitInverse extends Carre{


	public function remplir($n) {

		for ($i = 5; $i >= 1; $i--)
		{

			for ($j = 5; $j > $i; $j--) {
				echo "&nbsp;&nbsp;";
			}

			for ($k = 1; $k <= $i; $k++) {
				echo "*";
			}

			echo "</br>";
		}

	}

}