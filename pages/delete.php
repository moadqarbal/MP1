<?php


if (isset($_POST['btn-delete']))
{
    $id_etudiant = $_GET['delete_id'];


    if ($person->delete($id_etudiant))
    {
        echo '<script> window.location.href="index.php?page=add"; </script>';
    }else
        echo 'failed';
}



if(isset($_GET['delete_id']))
{
    $id_etudiant = $_GET['delete_id'];
}
    ?>


    <table class="uk-table">
        <caption>Table Caption</caption>
        <thead>
        <tr>
            <th>ID</th>
            <th>nom</th>
            <th>prenom</th>
            <th>date_de_naissance</th>
            <th>note1</th>
            <th>note2</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $query = "select * from etudiant where id_etudiant=:id_etudiant";
            $stmt = $conn->prepare($query);
            $stmt->execute(array(":id_etudiant"=>$id_etudiant));

            $row = $stmt->fetch(PDO::FETCH_ASSOC)

            ?>
        <tr>
            <td><?= $row['id_etudiant']; ?></td>
            <td><?= $row['nom']; ?></td>
            <td><?= $row['prenom']; ?></td>
            <td><?= $row['date_de_naissance']; ?></td>
            <td><?= $row['note1']; ?></td>
            <td><?= $row['note2']; ?></td>
            <td>
                <form method="post">
                    <input type="hidden" value="<?= $row['id']; ?>">
                    <button class="uk-button uk-button-danger" name="btn-delete" type="submit">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        </tbody>
    </table>




