<?php
 function imageResize( $ext, $ori_file, $new_file )
    {
        $max_imageSize = 400;
        $ori_size = getimagesize($ori_file);
        $ori_w = $ori_size[0];
        $ori_h = $ori_size[1];
         
        if($ori_w > $ori_h) {
            $new_w = $max_imageSize;
            $new_h = round(($new_w/$ori_w) * $ori_h);
        }
        else
        {
            $new_h = $max_imageSize;
            $new_w = round(($new_h/$ori_h) * $ori_w);
        }
     
        if ($ext == "jpg" or $ext == "jpeg") {
            $ori_img = imagecreatefromjpeg($ori_file);
        } else
        if ($ext == "png") {
            $ori_img = imagecreatefrompng($ori_file);
        } else
        if ($ext == "gif") {
            $ori_img = imagecreatefromgif($ori_file);
        } 
 
        $new_img = imagecreatetruecolor($new_w, $new_h);
        imagecopyresized($new_img, $ori_img, 0, 0, 0, 0, $new_w, $new_h, $ori_w, $ori_h);
        if ($ext == "jpg" or $ext == "jpeg") {
            imagejpeg($new_img, $new_file); 
        } else
        if ($ext == "png") {
            imagepng($new_img, $new_file); 
        } else
        if ($ext == "gif") {
            imagegif($new_img, $new_file); 
        }
         
        imagedestroy($ori_img);
        imagedestroy($new_img);
    }
   $fileName=$_FILES["file1"]["name"];
   $fileTmpLoc =$_FILES["file1"]["tmp_name"];
   $fileType=$_FILES["file1"]["200000000"];
   
   $fileErrorMsg=$_FILES["file1"]["error"];
   if(!$fileTmpLoc){
       echo "ERROR:Please browe for a file  ";
       exit();
   }
   if(move_uploaded_file($fileTmpLoc,"action/$fileName")){
                        
                        echo "<script>";
                        echo "alert(\" เพิ่มข้อมูลสำเร็จ\");"; 
                        echo "window.location.href = '/main.php'";
                        echo "</script>";
   }else{
       echo"False";
   }
       $action_name= $_POST['action_name'];
       $brand_id = $_POST['brand_id'];
       $option_id = $_POST['option_id'];
       $type_id = $_POST['type_id'];
       $status_id =$_POST['status_id'];
       $action_model=$_POST['action_model'];
       $action_description=$_POST['action_description'];
       $action_price=$_POST['action_price'];
       $action_priceperday=$_POST['action_priceperday'];
       $deposit_1=$_POST['deposit_1'];
       $deposit_2=$_POST['deposit_2'];
       $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
        mysqli_set_charset($con, "utf8");
        //echo 'ติดต่อฐานช้อมูลได้';
        mysqli_select_db($con,'main');
        $sql = "INSERT INTO action (action_name,brand_id,option_id,type_id,status_id,action_image,action_model,action_description,action_price,action_priceperday,deposit_1,deposit_2) 
		VALUES('$action_name','$brand_id','$option_id','$type_id','$status_id','$fileName','$action_model','$action_description','$action_price','$action_priceperday','$deposit_1','$deposit_2')";
		
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
?>