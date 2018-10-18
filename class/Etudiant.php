<?php


class EtudiantDB
{
    private $db;   // all infos connection


    public function __construct($conn)
    {
        $this->db = $conn;
    }



	public function create($nom,$prenom,$date_de_naissance,$note1,$note2)
    {
        $stmt = $this->db->prepare("insert into etudiant values 
                                    ('' ,:nom, :prenom, :date_de_naissance, 
									:note1, :note2 , CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP())");
									
        $stmt->bindparam(":nom",$nom);
        $stmt->bindparam(":prenom",$prenom);
        $stmt->bindparam(":date_de_naissance",$date_de_naissance);
        $stmt->bindparam(":note1",$note1);
        $stmt->bindparam(":note2",$note2);
        

        $stmt->execute();
        return true;
    }

    public function getID($id_etudiant)
    {
        $stmt = $this->db->prepare("select * from etudiant where id_etudiant=:id_etudiant");
        $stmt->execute(array(":id_etudiant"=>$id_etudiant));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function update($id_etudiant,$nom,$prenom,$date_de_naissance,$note1,$note2)
    {
        $stmt = $this->db->prepare
        ("update etudiant set nom = :nom,
							  prenom = :prenom,
							  date_de_naissance = :date_de_naissance,
							  note1 = :note1,
							  note2 = :note2
                              WHERE id_etudiant = :id_etudiant");

        $stmt->bindparam(":nom",$nom);
        $stmt->bindparam(":prenom",$prenom);
        $stmt->bindparam(":date_de_naissance",$date_de_naissance);
        $stmt->bindparam(":note1",$note1);
        $stmt->bindparam(":note2",$note2);
        $stmt->bindparam(":id_etudiant",$id_etudiant);
        $stmt->execute();
        return true;
    }

    public function delete($id_etudiant)
    {
        $stmt = $this->db->prepare("delete from etudiant where id_etudiant = :id_etudiant");
        $stmt->bindparam(":id_etudiant",$id_etudiant);
        $stmt->execute();
        return true;
    }

    public function dataView()
    {
        $query = "select * from etudiant";
        $stmt = $this ->db->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount()>0)
        {
            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
?>              <tr>
                    <td><?= $row['id_etudiant']; ?></td>
                    <td><?= $row['nom']; ?></td>
                    <td><?= $row['prenom']; ?></td>
                    <td><?= $row['date_de_naissance']; ?></td>
                    <td><?= $row['note1']; ?></td>
                    <td><?= $row['note2']; ?></td>
                    <td><?= $row['created_at']; ?></td>

                    <td>
                        <a href="index.php?page=edit&edit_id=<?= $row['id_etudiant']; ?>">
                            <i class="fa fa-pencil-square-o fa-2x"></i>
                        </a>
                    </td>
                    <td>
                        <a href="index.php?page=delete&delete_id=<?= $row['id_etudiant']; ?>">
                            <i class="fa fa-trash-o fa-2x"></i>
                        </a>
                    </td>
                </tr>
<?php
            }
        }else
        {
?>
            <td>No records :( </td></tr>
<?php
        }

    }
    






/*----- avg -----------*/


public function avgNote()
{
	$query = "select * from view_etudiant";
	$stmt = $this ->db->prepare($query);
	$stmt->execute();

	if ($stmt->rowCount()>0)
	{
		while($row = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>              <tr>
            <td><?= $row['id_etudiant']; ?></td>
            <td><?= $row['nom']; ?></td>
            <td><?= $row['prenom']; ?></td>
            <td><?= $row['moyenne_generale']; ?></td>
        </tr>
			<?php
		}
	}else
	{
		?>
        <td>No records :( </td></tr>
		<?php
	}

}



}  // end class