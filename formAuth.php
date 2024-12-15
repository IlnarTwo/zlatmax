<?php
session_start();
if(isset($_SESSION['auth'])){
    header("location: profil.php");
}else{
    //head
    require('view/header.php');
    //body
    require ("view/auth.html");
    //footer
    require('view/footer.html');
}

/*
require ("model.php");
$homepage = new Model();
$homepage ->filename="view/auth.html";
$homepage ->Display();*/
?>