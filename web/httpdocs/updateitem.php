<?php
    require 'index.php';
    $item_model = $_POST['item_model'];
    $item_name = $_POST['item_name'];
    $item_description = $_POST['item_description'];
    $option_id = $_POST['option_id'];
    $price = $_POST['price'];
    $priceperday =$_POST['priceperday'];
    $deposit_1 = $_POST['deposit_1'];
    $deposit_2 =$_POST['deposit_2'];
    $type_id = $_POST['type_id'];
    $brand_id = $_POST['brand_id'];
    $status_id =$_POST['status_id'];
    
   $q = "UPDATE items SET item_model='$item_model',item_name='$item_name',item_description='$item_description',option_id='$option_id',price='$price',priceperday='$priceperday',deposit_1='$deposit_1',deposit_2='$deposit_2',type_id='$type_id',brand_id='$brand_id',status_id='$status_id' VALUES '$item_name','$item_description','$option_id','$price','$priceperday','$deposit_1','$deposit_2','$type_id','$brand_id','$status_id WHERE item_id='$item_id'";
   $result = mysqli_query($con, $q);
   if($result){
   echo "แก้ไขข้อมูลเรียบร้อย";
   echo "<hr>";
   echo "<a href='List,php'>แสดงข้อมูล</a>";
   }else{
       echo "เกิดข้อผิดพลาด".mysqli_error($con);
      
   }
   mysqli_close($con);

