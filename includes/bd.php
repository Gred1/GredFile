<meta charset="utf-8">
<?php
require 'rb.php';
    R::setup( 'mysql:host=localhost;dbname=My_BD',
        'mysql', 'mysql' ); //for both mysql or mariaDB 
session_start();
?>