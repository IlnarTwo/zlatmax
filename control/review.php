<?php
session_start();
ini_set('memory_limit','1024M');
$review = $_POST['review'];
$rating = $_POST['rating'];
$date = date('y-m-d');
require("db.inc");


if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $sql = "INSERT INTO `commit`(`name_commit`, `date_commit`, `grade_commit`, `email_user`) VALUES ('".$review."','".$date."','".$rating."','".$email."')";
}else{
    $sql = "INSERT INTO `commit`(`name_commit`, `date_commit`, `grade_commit`, `email_user`) VALUES ('".$review."','".$date."','".$rating."','guost')";
}

$insert = $conn->query($sql);
header("location: ../cardProduct.php");
?>