<?php

include 'class/Carre.php';
include 'class/Tri.php';
include 'class/TriInverse.php';
include 'class/TriLarge.php';
include 'class/TriLargeInverse.php';
include 'class/TriDroit.php';
include 'class/TriDroitInverse.php';

?>



	<form class="uk-form-stacked uk-margin-large-top" method="post">

		<div class="uk-margin">
			<label class="uk-form-label" for="form-stacked-text">Nombre des lignes</label>
			<div class="uk-form-controls">
				<input class="uk-input" id="form-stacked-text"
				       name="n" type="text" placeholder="Entrez le nombre des lignes...">
			</div>
		</div>

		<div class="uk-margin">
			<label class="uk-form-label" for="form-stacked-select">Type de triangle</label>
			<div class="uk-form-controls">
				<select class="uk-select" name="type" id="form-stacked-select">
					<option value="tr1">normale</option>
					<option value="tr2">inverse</option>
					<option value="tr3">Large</option>
					<option value="tr4">Large Inverse</option>
					<option value="tr5">Droite</option>
					<option value="tr6">Droite Inverse</option>
				</select>
			</div>
		</div>

		<button type="submit" name="send" class="uk-button
		uk-button-primary uk-width-1-1 uk-margin-small-bottom">
			Calculer
		</button>
	</form>



<?php

if(isset($_POST['send'])):

	$n = $_POST['n'];
	$type = $_POST['type'];
	$obj=null;

	switch ($type) {

		case "tr1":

			$obj = new Tri();
			break;

		case "tr2":

			$obj = new TriInverse();
			break;

		case "tr3":

			$obj = new TriLarge();
			break;

		case "tr4":

			$obj = new TriLargeInverse();
			break;

		case "tr5":

			$obj = new TriDroit();
			break;

		case "tr6":

			$obj = new TriDroitInverse();
			break;



	}
	$obj->remplir($n);

	//header("location:index.php?page=carre_affichage&val=$n");




endif;  // endif(isset)




