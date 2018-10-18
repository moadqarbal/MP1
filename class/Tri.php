<?php



class Tri extends Carre{


	public function remplir($n) {

		for ($i =0 ; $i<=$n  ; $i++)
		{
			for($j=0 ; $j<= $i ; $j++)
			{
				echo '*';
			}

			echo '<br>';
		}

	}

}

