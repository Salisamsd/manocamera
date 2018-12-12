<?php
    require 'conn.php';
    $id_location = $_POST['id_location'];
	$lattitude = $_POST['lattitude'];
	$longtitude = $_POST['longtitude'];
	//$time = date("Y-m-d H:i:s");
	//$type = $_POST['type'];
    //$id_boat = $_POST['id_boat'];
    
    $id_line = $_POST ['id_line'];

    $q =" INSERT INTO location(id_location,lattitude,longtitude) VALUES ('$id_location','$lattitude','$longtitude')";
    $result = mysqli_query($conn,$q);
    if($result) {
        echo "เพิ่มข้อมูลเรียบร้อย";}
else{
    echo "เกิดข้อผิดพลาด".mysqli_error($conn);
    
}
mysqli_close($conn);
?>