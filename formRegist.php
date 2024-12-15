<?php
session_start();
//head
require('view/header.php');
//body
require ("view/regist.html");
//footer
require('view/footer.html');

/*
require ("model.php");
$homepage = new Model();
$homepage ->filename="view/regist.html";
$homepage ->Display();*/
?>