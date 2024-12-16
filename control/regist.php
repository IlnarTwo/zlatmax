<?php
    require('db.inc');
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $passw = sha1($_POST['passw']);
    $img = "default";

    $query = "select * from user where email = '".$email."';";
    $result = $conn->query($query);
    $user = $result->fetch(PDO::FETCH_ASSOC);
    if(!empty($user)){
        echo "<script>alert('Пользователь с такой почтой уже создан!');</script>";
        header("location: ../formRegist.php");
    }else{
        $insert = "INSERT INTO `user`(`ava`, `name`, `tel`, `email`, `passw`) VALUES ('".$img."','".$name."','".$tel."','".$email."','".$passw."')";
        $resinto = $conn->query($insert);
        if (!empty($resinto)){
            session_start();
            $_SESSION["auth"]=true;
            $_SESSION["id"]=$user['id'];
            $_SESSION['name']=$user['name'];
            echo "<script>alert('Вы зарегистрированы!');</script>";
            header("location: ../profil.php"); 
        }else{
            echo "<script>alert('Произошла ошибка, пользователь не зарегистрирован. Попробуйте еще раз!');</script>";
            header("location: ../formRegist.php");
        }
    }
?>