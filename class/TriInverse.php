<?php


class TriInverse extends Carre {

	public function remplir($n) {

		for ($i =0 ; $i<=$n  ; $i++)
		{
			for($j=$i ; $j<= $n ; $j++)
			{
				echo '*';
			}

			echo '<br>';
		}

	}

}