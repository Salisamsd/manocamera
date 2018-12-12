<?php
    require 'conn.php';
    $id=$_POST['id'];
    $id_boat = $_POST['id_boat'];
    $boat_name = $_POST ['boat_name'];
    $id_line = $_POST ['id_line'];

    $q =" INSERT INTO boat(id,id_boat,boat_name,id_line) VALUES ('','$id_boat','$boat_name','$id_line')";
    $result = mysqli_query($conn,$q);
    if($result) {
        echo "เพิ่มข้อมูลเรียบร้อย";}
else{
    echo "เกิดข้อผิดพลาด".mysqli_error($con);
    
}
mysqli_close($con);
?>

