<?php
    require 'index.php';
    $ft_model = $_POST['ft_model'];
    $item_id = $_POST ['item_id'];
    $ft_name = $_POST ['ft_name'];
    $status_id = $_POST ['status_id'];
    
    $q =" INSERT INTO freeitems(ft_id,ft_model,item_id,ft_name,status_id) VALUES ('','$ft_model','$item_id','$ft_name','$status_id')";
    $result = mysqli_query($con,$q);
    if($result) {
        echo "เพิ่มข้อมูลเรียบร้อย";}
else{
    echo "เกิดข้อผิดพลาด".mysqli_error($con);
    
}
mysqli_close($con);