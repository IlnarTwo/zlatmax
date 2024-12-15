<?php
session_start();
//head
require('view/header.php');
//body
require ("view/catalog.php");
//footer
require('view/footer.html');

/*
require ("model.php");
$homepage = new Model();
$homepage ->filename="view/catalog.php";
$homepage ->Display();*/
?>
