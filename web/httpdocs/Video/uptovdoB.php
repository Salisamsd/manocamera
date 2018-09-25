<?php
    require '../index.php';
    $item_id = $_POST['item_id'];
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
    
   $q = "UPDATE items SET item_model='$item_model',item_name='$item_name',item_description='$item_description',option_id='$option_id',item_price='$item_price',item_priceperday='$item_priceperday',deposit_1='$deposit_1',deposit_2='$deposit_2',type_id='$type_id',brand_id='$brand_id',status_id='$status_id' WHERE item_id=$item_id";
   $result = mysqli_query($con, $q);
   if($result){
   echo "<script>";
                        echo "alert(\" แก้ไขข้อมูลสำเร็จ\");"; 
                        echo "window.location.href = 'listvdo_B.php'";
                        echo "</script>";
   }else{
       echo"False";
   }
   mysqli_close($con);

