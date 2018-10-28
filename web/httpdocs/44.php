<?php
    //$old_image = $_POST['img1'];﻿
    //$old_image1= $_POST['img2'];﻿
    $imgname=$_POST['imgname'];
    $random_digit=rand(0000,9999);
    if(isset($_POST['update'])){
        if(isset($_FILES['img1']['name']) && ($_FILES['img1']['name']!="") && ($_FILES['img2']['name']) && ($_FILES['img2']['name']!="") ){
        $image_name="img_".$imgname."-".$random_digit.date('m-d-Y_H:i:s')."-".$_FILES['img1']['name'];
        $image_type=$_FILES['img1']['type'];
        $image_size=$_FILES['img1']['size'];
        $image_tmp_name=$_FILES['img1']['tmp_name'];
        
        $image1_name="img_".$imgname."-".$random_digit.date('m-d-Y_H:i:s')."-".$_FILES['img2']['name'];
        $image1_type=$_FILES['img2']['type'];
        $image1_size=$_FILES['img2']['size'];
        $image1_tmp_name=$_FILES['img2']['tmp_name'];
        //unlink("upload/$old_image1");    
        //unlink("upload/$old_image");    
            
                move_uploaded_file ($image_tmp_name,"upload/$image_name");
                move_uploaded_file ($image1_tmp_name,"upload/$image1_name");
    }
    else {
        //$image_name=$old_image;
        //$image1_name=$old_image1;
        echo 'uploaded';
    }
            $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
            mysqli_set_charset($con, "utf8");
            //echo 'ติดต่อฐานช้อมูลได้';
            mysqli_select_db($con,'main');
            $sql = "UPDATE two SET imgname='$imgname', img1='$image_name' ,img2='$image1_name' WHERE id='$id'"; 
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
            if($result){
                        echo "<script>";
                        echo "alert(\" แก้ไขข้อมูลสำเร็จ\");"; 
                        echo "window.location.href = '22.php'";
                        echo "</script>";
   }else{
       echo "เกิดข้อผิดพลาด".mysqli_error($con);
      
   }
	mysqli_close($con);  } 
?>
      
     
