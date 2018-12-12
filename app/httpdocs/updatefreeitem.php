<?php
    require 'index.php';
    $ft_id =$_POST['ft_id'];
	$ft_model=$_POST['ft_model'];
    $item_id =$_POST['item_id'];
    $ft_name =$_POST['ft_name'];
    $status_id =$_POST['status_id'];
    
    $q="UPDATE freeitems SET ft_id='$ft_id',ft_model='$ft_model',item_id='$item_id',ft_name='$ft_name',status_id='$status_id' WHERE ft_id='$ft_id'"; 
    $result = mysqli_query($con, $q);
   if($result){
   echo "แก้ไขข้อมูลเรียบร้อย";
   echo "<hr>";
   echo "<a href='freeitemslist.php'>แสดงข้อมูล</a>";
   }else{
       echo "เกิดข้อผิดพลาด".mysqli_error($con);
      
   }
   mysqli_close($con);
    
