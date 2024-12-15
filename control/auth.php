<?php
    require('db.inc');
    $email = $_POST['email'];
    $passw = sha1($_POST['passw']);

    $query = "select * from user where email = '".$email."';";
    $result = $conn->query($query);
    $user = $result->fetch(PDO::FETCH_ASSOC);
    if(empty($user)){
        echo "<script>alert('Такого пользователя нет или пароль был введен не верно!');</script>";
        header("location: ../formRegist.php");
    }else{
        if ($passw==$user["passw"]){
            session_start();
            $_SESSION["auth"]=true;
            $_SESSION["id"]=$user['id'];
            $_SESSION['name']=$user['name'];
            echo "<script>alert('Вы вошли!');</script>";
            header("location: ../profil.php"); 
        }else{
            echo "<script>alert('Произошла ошибка, пользователь не зарегистрирован. Попробуйте еще раз!');</script>";
            header("location: ../formRegist.php");
        }
    }
?>