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
    
<<<<<<< HEAD
  // $fileName=$_FILES["file1"]["name"];
  // $fileTmpLoc =$_FILES["file1"]["tmp_name"];
   //$fileType=$_FILES["file1"]["200000000"];
   
  // $fileErrorMsg=$_FILES["file1"]["error"];
  // if(!$fileTmpLoc){
  //     echo "ERROR:Please browe for a file  ";
  //     exit();
 //  }
 //  if(move_uploaded_file($fileTmpLoc,"TB_Travel/$fileName")){
                        
        //                echo "<script>";
       //                 echo "alert(\" เพิ่มข้อมูลสำเร็จ\");"; 
       //                 echo "window.location.href = 'listTBtravel.php'";
       //                 echo "</script>";
 //  }else{
   //    echo"False";
  // }
                $Place_id = $_POST['Place_id'];
		$Place_name = $_POST['Place_name'];
       if(isset($_POST['upload'])){
        $image_name="-".$Place_name."-".$random_digit.date('m-d-Y_H:i:s')."-".$_FILES['file1']['name'];
        $image_type=$_FILES['file1']['type'];
        $image_size=$_FILES['file1']['size'];
        $image_tmp_name=$_FILES['file1']['tmp_name'];
            
            if($image_name==''){
                 echo "<script>";
                 echo "alert(\" กรุณาใส่รูป\");";
                 echo "</script>";
            
    }
            else    {    
                move_uploaded_file ($image_tmp_name,"TB_Travel/$image_name");
       }}
      if(isset($_POST['upload'])){
        $image1_name= "-".$Place_name."-".$random_digit."-".date('m-d-Y_H:i:s').$_FILES['file2']['name'];
        $image1_type=$_FILES['file2']['type'];
        $image1_size=$_FILES['file2']['size'];
        $image1_tmp_name=$_FILES['file2']['tmp_name'];
            
            if($image1_name==''){
                 echo "<script>";
                 echo "alert(\" กรุณาใส่รูป\");";
                 echo "</script>";
            
    }
            else{        
                move_uploaded_file ($image1_tmp_name,"TB_Travel/$image1_name");
      echo 'uploaded';}}
=======
   $fileName=$_FILES["file1"]["name"];
   $fileTmpLoc =$_FILES["file1"]["tmp_name"];
   $fileType=$_FILES["file1"]["200000000"];
   
   $fileErrorMsg=$_FILES["file1"]["error"];
   if(!$fileTmpLoc){
       echo "ERROR:Please browe for a file  ";
       exit();
   }
   if(move_uploaded_file($fileTmpLoc,"TB_Travel/$fileName")){
                        
                        echo "<script>";
                        echo "alert(\" เพิ่มข้อมูลสำเร็จ\");"; 
                        echo "window.location.href = 'listTBtravel.php'";
                        echo "</script>";
   }else{
       echo"False";
   }
        $Place_id = $_POST['Place_id'];
		$Place_name = $_POST['Place_name'];
>>>>>>> 700b7d4e26d0b1f7c2b88eb2f98da65acd9ffb68
       $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
        mysqli_set_charset($con, "utf8");
        //echo 'ติดต่อฐานช้อมูลได้';
        mysqli_select_db($con,'main');
<<<<<<< HEAD
        $sql = "INSERT INTO TBtravel (Place_name,Place_img,Place_img2) 
		VALUES('$Place_name','$image_name','$image1_name')";
=======
        $sql = "INSERT INTO TBtravel (Place_name,Place_img) 
		VALUES('$Place_name','$fileName')";
>>>>>>> 700b7d4e26d0b1f7c2b88eb2f98da65acd9ffb68
		
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
?>