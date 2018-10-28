<?php


if (isset($_POST['btn-save']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $note1 = $_POST['note1'];
    $note2 = $_POST['note2'];

    if ($person->inserer_etudiant($nom,$prenom,$date_de_naissance,$note1,$note2))
    {
        echo '<script> window.location.href="index.php?page=add"; </script>';
    }else
        echo 'failed';
}

?>

<div class="uk-margin-top">
    <button class="uk-button btn-add uk-button-default uk-margin-small-right"
            type="button" uk-toggle="target: #modal-example">Ajouter Etudiant &nbsp;
        <i class="fa fa-plus-circle mycolor" aria-hidden="true"></i>
    </button>

    <a href="?page=avg-note">
        <button class="uk-button btn-add uk-button-default uk-margin-small-right"
                type="button">
            La Moyenne des etudiants &nbsp;
            <i class="fa fa-folder-o mycolor" aria-hidden="true"></i>
        </button>
    </a>
</div>




<div class="uk-container">
    <table class="uk-table uk-table-hover uk-table-divider mytable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de Naissance</th>
            <th>La 1er Note</th>
            <th>La 2eme Note</th>
            <th>la date de creation</th>
        </tr>
        </thead>
        <tbody>
        <?= $person->dataView(); ?>
        </tbody>
    </table>
</div>







<!-- This is the modal -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">ADD NEW PERSON</h2>


        <form method="post">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Infos</legend>

                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Votre Nom" name="nom">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Votre Prenom" name="prenom">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="date" placeholder="La date de naissance" name="date_de_naissance">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" id="note1" placeholder="La 1er note" name="note1">
                </div>
				
                <div class="uk-margin">
                    <input class="uk-input" type="text" id="note2" placeholder="La 2eme note" name="note2">
                </div>

                <a class="uk-margin">
                    <input class="uk-input" type="text"
                           placeholder="Moyenne" id="getMoyenne" name="moyenne">
                </a>

                <div class="uk-margin">
                    <div class="uk-button uk-button-primary" id="calcMoyenne">
                        Calculer Moyenne
                    </div>
                </div>

               

            </fieldset>
            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" name="btn-save" type="submit">Save</button>
            </p>
        </form>
    </div>
</div>
