 <?php

    if(isset($_POST['upload'])){
        $image_name=$_FILES['img1']['name'];
        $image_type=$_FILES['img1']['type'];
        $image_size=$_FILES['img1']['size'];
        $image_tmp_name=$_FILES['img1']['tmp_name'];
            
            if($image_name==''){
                 echo "<script>";
                 echo "alert(\" กรุณาใส่รูป\");";
                 echo "</script>";
            
    }
            else        
                move_uploaded_file ($image_tmp_name,"upload/$image_name");
    
    
      if(isset($_POST['upload'])){
        $image1_name=$_FILES['img2']['name'];
        $image1_type=$_FILES['img2']['type'];
        $image1_size=$_FILES['img2']['size'];
        $image1_tmp_name=$_FILES['img2']['tmp_name'];
            
            if($image1_name==''){
                 echo "<script>";
                 echo "alert(\" กรุณาใส่รูป\");";
                 echo "</script>";
    }
            else        
                move_uploaded_file ($image1_tmp_name,"upload/$image1_name");
            echo 'uploaded';
            $imgname = $_POST['imgname'];
            $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
            mysqli_set_charset($con, "utf8");
            //echo 'ติดต่อฐานช้อมูลได้';
             mysqli_select_db($con,'main');
            $sql = "INSERT INTO two (imgname,img1,img2) 
		VALUES($imgname,'$image_name','$image1_name')";
		
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
                echo "<script>";
                        echo "alert(\" เพิ่มข้อมูลสำเร็จ\");"; 
                        echo "window.location.href = 'listTBtravel.php'";
                        echo "</script>";
	mysqli_close($con);}   }
?>
      
     
