<?php
    require 'conn.php';
    //$id_location = $_POST['id_location'];
	$lat = $_POST['lat'];
	$lon = $_POST['lon'];
	//$type = $_POST['type'];
	//$id_boat = $_POST['id_boat'];
	//$id_line = $_POST['id_line'];

	
    
   

    $q =" INSERT INTO location(lat,lon) VALUES ('$lat','$lon')";
    $result = mysqli_query($conn,$q);
    if($result) {
        echo "เพิ่มข้อมูลเรียบร้อย";}
else{
    echo "เกิดข้อผิดพลาด".mysqli_error($conn);
    
}
mysqli_close($conn);
?>