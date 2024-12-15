<?php
require("db.inc");
session_start();

$name = $_POST['name'];
$tel = $_POST['tel']; 
$img = $_FILES["img"]["tmp_name"];

$id = $_SESSION['id'];
$select = "select * from user where id = '".$id."';";
$selres = $conn->query($select);
$user = $selres->fetch(PDO::FETCH_ASSOC);
$email = $user['email'];
echo $email;
echo "<br>";
echo $id; 
echo "<br>";
echo $_SESSION['id'];

if ($img!=NULL){
    image_resize($img, $email, $id);
    $img = $email."_".$id; 
}else{

    $img = $user['ava'];
}

/*
if ($oldPassw!=NULL){
    $oldPassw = md5($oldPassw);
    if ($oldPassw == $_SESSION['passw']){
        $query = "UPDATE `user` SET `ava`='".$img."',`name`='".$name."',`tel`='".$tel."' WHERE `id` = '".$_SESSION['id']."'";
        $result = mysqli_query($db, $query);
        $_SESSION['name']= $name;
        echo "как-то прошло, но ничего не изменило";
        header("location: ../profil.php");
    }else{
        echo "чет пароль типо есть но не тот";
        header("location: profil.php");
    }
}else{*/
    echo "пароля нет, но ничего не меняет";
    $query = "UPDATE `user` SET `ava`='".$img."',`name`='".$name."',`tel`='".$tel."' WHERE `id` = '".$_SESSION['id']."'";
    $result = mysqli_query($db, $query);
    $_SESSION['name']= $name;
    header("location: ../profil.php");
//}

function image_resize($file, $e, $d) { 
	$size = GetImageSize($file);
	if($size[2] == "2"){
        $src_img=imagecreatefromjpeg($file);
    }elseif($size[2] == "3"){
        $src_img=imagecreatefrompng($file);
    }

    $src_width = $size[0];
    $src_height = $size[1];
	   
	$dest_height = $dest_width = "300";

    $dest_img=ImageCreateTrueColor($dest_width, $dest_height); 
    ImageCopyResampled($dest_img, $src_img, 0, 0, 0, 0, $dest_width, $dest_height, $src_width, $src_height);

    imagepng($dest_img, "../img/".$e."_".$d.".png", 8);
}
function test_input($data) {
    $data = trim($data); //удалим ненужные символы (лишние пробелы, табуляции, переходы на новую строку)
    $data = stripslashes($data);  //удалим обратную косую черту (\)
    $data = htmlspecialchars($data);  //преобразует специальные символы (в нашем случае угловые скобки < и >) в объекты HTML для защиты от эксплойта
    return $data;
}
?>