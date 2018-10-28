<?php

$id = $_GET[id];
$text = $_POST[text];

$s= "SELECT * from 22 WHERE id_place = $id";
$rs = mysql_query($s);
$r = mysql_fetch_assoc($rs);

$delete="path/$r[place_photo]";
unlink($delete);

$ext = pathinfo(basename ($_FILES[filUpload][name]),PATHINFO_EXTENSION);
$new = 'img_'.(uniqid()).".".$ext; //สุ่มชื่อ
$image_path = "image/"; //ที่อยู่
$upload = $image_path.$new; 
move_uploaded_file($_FILES[filUpload][tmp_name],$upload);

$photo = $new;

$sql = "UPDATE tb_place SET ";
$sql .= "id_place = '$id_place', ";
$sql .= "name_place = '$name_place', ";
$sql .= "location = '$location', ";
$sql .= "officer = '$officer', ";
$sql .= "place_photo = '$photo' ";
$sql .= "WHERE id_pace = $id_place";
$result = mysql_query($sql);
Header("Location: php-admin_page2.php");

?>

