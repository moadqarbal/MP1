# Mini Projet 1 (Documentation)

## Author : Mouad and moad 

# php_oop_pdo_crud
PHP CRUD with PDO extension 
## Description
The PHP Data Objects (PDO) extension defines a consistent, lightweight interface for accessing databases in PHP. PDO extension provides a data-access abstraction layer, which means that you can use different databases using the same functions to queries and fetch data from the database.

This PHP PDO example, implements a simple PHP CRUD operation, learning:
* PDO connection
* PDO insert 
* PDO select 
* PDO update 
* PDO delete 
The example provides a simple Web view,
 add, edit, and delete functionality with
  PHP OOP using PDO.

In this example script, we’ll 
fetch the (etudiant) data from the 
database and display the user data 
list with add link, edit link, and delete
 link. By these links user can add new data 
 to the database, update previously inserted 
 data and delete the data from the database. 
 We’ll use Object oriented approach to building 
 the example script and bootstrap table structure 
 for styling the list, form fields, and links.

### Database Table Creation
For this example application, we’ll create a simple table (etudiant) with some basic columns where users data would be stored.

### Database Class (dbconnection.php)
DB class handles all the operations related to the database using PHP PDO extension and MySQL. For example, connect with the database, insert, update and delete the record from the database. You need to change the $servername, $dbname, $username, and $password variables value as per the database credentials.

### Index - index.php
index page using the master page

#### UiKit libraries:
Uikit CSS & JS library need to be included if you want to use UiKit table and form structure.

`<link href="public/css/uikit.css" rel="stylesheet">
<script src="public/js/uikit.js"></script>`
 
