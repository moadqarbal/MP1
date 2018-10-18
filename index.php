<?php

spl_autoload_register(function ($class){

	require 'class/' . $class . '.php';

});

include_once 'include/dbconnection.php';

$pages = scandir('pages');
$page = $_GET['page'];


if(!empty($page) AND in_array($page . '.php' ,$pages))
{
    $content = 'pages/' . $page . '.php';
}
else header("location:index.php?page=accueil");


include_once 'include/Header.php';

echo '<div class="uk-container">';
include($content);
echo '</div>';

include_once 'include/Footer.php';



?>









