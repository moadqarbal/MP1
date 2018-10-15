

<div class="uk-margin-top">
	<a href="<?php echo $_SERVER['HTTP_REFERER'] ?>" class="uk-button btn-add uk-button-default uk-margin-small-right"
	        type="button">Retour &nbsp;
		<i class="fa fa-arrow-right mycolor" aria-hidden="true"></i>
	</a>

</div>




<div class="uk-container">

	<h2 class="uk-margin-medium-top">Moyenne</h2>

	<table class="uk-table uk-table-hover uk-table-divider mytable">
		<thead>
		<tr>
			<th>ID</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Moyenne des notes</th>

		</tr>
		</thead>
		<tbody>
		<?= $person->avgNote(); ?>
		</tbody>
	</table>
</div>





