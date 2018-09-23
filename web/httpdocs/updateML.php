<?php
    require 'index.php';
    $ml_id = $_POST['ml_id'];
    $ml_model = $_POST['ml_model'];
    $ml_name = $_POST['ml_name'];
    $ml_description = $_POST['ml_description'];
    $option_id = $_POST['option_id'];
    $ml_price = $_POST['ml_price'];
    $ml_priceperday =$_POST['ml_priceperday'];
    $deposit_1 = $_POST['deposit_1'];
    $deposit_2 =$_POST['deposit_2'];
    $type_id = $_POST['type_id'];
    $brand_id = $_POST['brand_id'];
    $status_id =$_POST['status_id'];
    $ml_image =$_POST['ml_image'];
    
   $q = "UPDATE mirrorless SET ml_model='$ml_model',ml_name='$ml_name',ml_description='$ml_description',option_id='$option_id',ml_price='$ml_price',ml_priceperday='$ml_priceperday',deposit_1='$deposit_1',deposit_2='$deposit_2',type_id='$type_id',brand_id='$brand_id',status_id='$status_id',ml_image='$ml_image' WHERE ml_id=$ml_id";
   $result = mysqli_query($con, $q);
   if($result){
   echo "แก้ไขข้อมูลเรียบร้อย";
   echo "<hr>";
   echo "<a href='List.php'>แสดงข้อมูล</a>";
   }else{
       echo "เกิดข้อผิดพลาด".mysqli_error($con);
      
   }
   mysqli_close($con);


