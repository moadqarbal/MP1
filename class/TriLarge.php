<?php


class TriLarge extends Carre {

public $m=1;

	public function remplir($n) {

		for($i=1; $i<=$n; $i++) { // num of rows
			for($j=$i; $j<=$n-1; $j++) {
				echo "&nbsp;&nbsp;";
			}
			for($k=1; $k<= $this->m; $k++)  {
				echo "*";
			}
			for($c=$this->m; $c>1; $c--) {
				echo "*";
			}
			echo "<br>";
			$this->m++;
		}

	}


}
