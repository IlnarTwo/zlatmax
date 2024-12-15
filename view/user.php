<?php
$id = $_SESSION['id'];
require("control/db.inc");
$query = "select * from user where id = '".$id."';";
$result = $conn->query($query);
$user = $result->fetch(PDO::FETCH_ASSOC);
echo "
<div class='container'>
    <div class='formBox'>
        <h2>Профиль</h2>
            <form class='formUser' action='../control/editing.php' method='post' enctype='multipart/form-data'>
                <div><!-- фото -->
                    <label for='ava'><img src='img/".$user['ava'].".png' /></label>
                    <input type='file' id='ava' name='img'><br />
                </div>    

                Имя
                <input name='name' type='text' value='".$user['name']."' >
            
                Телефон
                <input name='tel' type='tel' value='".$user['tel']."' >
            
                Почта
                <input name='email' type='email' value='".$user['email']."' readonly>

                <button type='submit' class='btnProductBlack'>
                    Изменить
                </button>
            </form>
        <a href='../control/exit.php'>Выход</a>
    </div>
</div>
";
?>