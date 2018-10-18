<?php


class TriLargeInverse extends Carre {


	public function remplir($n) {

		// Outer loop for changing rows
		for ($i = $n; $i >= 1; $i--) {
			//Loop added for spacing
			for ($j = $n; $j > $i; $j--) {
				echo "&nbsp;&nbsp;";
			}

			//Loop added for printing star
			for ($k = 1; $k < ($i * 2); $k++) {
				echo "*";
			}
			echo "</br>";
		}

	}


}
