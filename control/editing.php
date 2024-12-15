<?php
require("db.inc");

$name = $_POST['name'];
$tel = $_POST['tel']; 
$img = $_FILES["img"]["tmp_name"];

$id = $_SESSION['id'];
$query = "select * from user where id = '".$id."';";
$result = $conn->query($query);
$user = $result->fetch(PDO::FETCH_ASSOC);
$email = $user['email'];

if ($img!=NULL){
    image_resize($img, $email, $id);
    $img = $email."_".$id; 
}else{
    $img = "defualt";
}

session_start();
if ($oldPassw!=NULL){
    $oldPassw = md5($oldPassw);
    if ($oldPassw == $_SESSION['passw']){
        $query = "UPDATE `user` SET `ava`='[value-1]',`name`='[value-2]',`tel`='[value-3]',`email`='[value-4]',`passw`='[value-5]' WHERE `id` = '".$_SESSION['id']."'";
        $result = mysqli_query($db, $query);
        $_SESSION['name']= $name;
        echo "как-то прошло, но ничего не изменило";
        header("location: profil.php");
    }else{
        echo "чет пароль типо есть но не тот";
        header("location: profil.php");
    }
}else{
    echo "пароля нет, но ничего не меняет";
    $query = "UPDATE `users` SET `name`='$name',`tel`='$tel',`imgMax`='$imgMax',`imgMin`='$imgMin',`status`='$status' WHERE `email`='".$_SESSION['email']."'";
    $result = mysqli_query($db, $query);
    $_SESSION['name']= $name;
    header("location: profil.php");
}

function image_resize($file, $e, $d) {
    $src_img=imagecreatefrompng($file); 
	$size = GetImageSize($file);
		
    $src_width = $size[0];
    $src_height = $size[1];
	   
	$dest_height_min = $dest_width_min = "100";
	$dest_height_max = $dest_width_max = "800";

    $dest_img_min=ImageCreateTrueColor($dest_width_min, $dest_height_min); 
    ImageCopyResampled($dest_img_min, $src_img, 0, 0, 0, 0, $dest_width_min, $dest_height_min, $src_width, $src_height);
    $dest_img_max=ImageCreateTrueColor($dest_width_max, $dest_height_max); 
    ImageCopyResampled($dest_img_max, $src_img, 0, 0, 0, 0, $dest_width_max, $dest_height_max, $src_width, $src_height); 

    imagepng($dest_img_min, "img/".$e."_".$d."_min.png", 8); 
    imagepng($dest_img_max, "img/".$e."_".$d."_max.png", 8); 
}
function test_input($data) {
    $data = trim($data); //удалим ненужные символы (лишние пробелы, табуляции, переходы на новую строку)
    $data = stripslashes($data);  //удалим обратную косую черту (\)
    $data = htmlspecialchars($data);  //преобразует специальные символы (в нашем случае угловые скобки < и >) в объекты HTML для защиты от эксплойта
    return $data;
}
?>