<?php

$servername = 'localhost';
$dbname = 'miage_tp1';
$username = 'root';
$password = '';


try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //echo 'Connected';

} catch(PDOException $e)
{
    echo 'Error ' . $e->getMessage();
}
// $conn variable contains all informations of connection


include_once 'class/Etudiant.php';
$person = new EtudiantDB($conn);  // $conn is a var declared in construction in class person

