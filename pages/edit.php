<?php



if(isset($_GET['edit_id']))
{
    $id_etudiant = $_GET['edit_id'];
    extract($person->getID($id_etudiant));


}

if (isset($_POST['btn-update']))
{
    $id_etudiant = $_GET['edit_id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $note1 = $_POST['note1'];
    $note2 = $_POST['note2'];

    if ($person->update($id_etudiant,$nom,$prenom,$date_de_naissance,$note1,$note2))
    {
        echo '<script> window.location.href="index.php?page=add"; </script>';
    }else
        echo 'failed';
}

?>



<form method="post" class="uk-container">
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">modifier</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text" value="<?= $nom ?>" placeholder="Votre nom" name="nom">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" value="<?= $prenom ?>" placeholder="Votre Prenom" name="prenom">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="date"  value="<?= $date_de_naissance ?>" placeholder="Date de naissance" name="date_de_naissance">
        </div>
		
        <div class="uk-margin">
            <input class="uk-input" type="text" value="<?= $note1 ?>" placeholder="1er Note" name="note1">
        </div>
		
        <div class="uk-margin">
            <input class="uk-input" type="text" value="<?= $note2 ?>" placeholder="2eme Note" name="note2">
        </div>

    </fieldset>
    <p class="uk-text-right">
        <input class="uk-button uk-button-default uk-modal-close" value="Cancel" type="reset">
        <button class="uk-button uk-button-primary" name="btn-update" type="submit">Save</button>
    </p>
</form>
