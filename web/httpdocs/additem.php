<?php
    require 'index.php';
    $item_model = $_POST['item_model'];
    $item_name = $_POST['item_name'];
    $item_description = $_POST['item_description'];
    $option_id = $_POST['option_id'];
    $item_price = $_POST['item_price'];
    $item_priceperday =$_POST['item_priceperday'];
    $deposit_1 = $_POST['deposit_1'];
    $deposit_2 =$_POST['deposit_2'];
    $type_id = $_POST['type_id'];
    $brand_id = $_POST['brand_id'];
    $status_id =$_POST['status_id'];
    
   //upload
    $ext= pathinfo(basename($_FILES['item_image']['name']),PATHINFO_EXTENSION);
    $new_image_name='img_'.uniqid().".".$ext;
    $image_path='imageitems/';
    $upload_path = $image_path.$new_image_name;
    //uploading
    $success = move_uploaded_file($_FILES['item_image']['tmp_name'], $upload_path);
    if ($success==FALSE){
        echo 'อัพไม่ได้';
        exit();
    }
   $item_image = $new_image_name;
   $q = "INSERT INTO items(item_id,item_model,item_name,item_description,option_id,item_price,item_priceperday,deposit_1,deposit_2,type_id,brand_id,status_id,item_image) VALUES ('','$item_model','$item_name','$item_description','$option_id','$item_price','$item_priceperday','$deposit_1','$deposit_2','$type_id','$brand_id','$status_id','$item_image')";
   $result = mysqli_query($con, $q);
   if($result){
   echo "เพิ่มข้อมูลเรียบร้อย";}
else{
    echo "เกิดข้อผิดพลาด".mysqli_error($con);
   
   }
   mysqli_close($con);

