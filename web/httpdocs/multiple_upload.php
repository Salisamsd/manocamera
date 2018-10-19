 <?php
<<<<<<< HEAD
 
    $imgname=$_POST['imgname'];
    $random_digit=rand(0000,9999);
    if(isset($_POST['upload'])){
        $image_name="-".$imgname."-".$random_digit.date('m-d-Y_H:i:s')."-".$_FILES['img1']['name'];
=======

    if(isset($_POST['upload'])){
        $image_name=$_FILES['img1']['name'];
>>>>>>> 700b7d4e26d0b1f7c2b88eb2f98da65acd9ffb68
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
<<<<<<< HEAD

      if(isset($_POST['upload'])){
        $image1_name= "-".$imgname."-".$random_digit."-".date('m-d-Y_H:i:s').$_FILES['img2']['name'];
=======
    
    
      if(isset($_POST['upload'])){
        $image1_name=$_FILES['img2']['name'];
>>>>>>> 700b7d4e26d0b1f7c2b88eb2f98da65acd9ffb68
        $image1_type=$_FILES['img2']['type'];
        $image1_size=$_FILES['img2']['size'];
        $image1_tmp_name=$_FILES['img2']['tmp_name'];
            
            if($image1_name==''){
                 echo "<script>";
                 echo "alert(\" กรุณาใส่รูป\");";
                 echo "</script>";
<<<<<<< HEAD
            
=======
>>>>>>> 700b7d4e26d0b1f7c2b88eb2f98da65acd9ffb68
    }
            else        
                move_uploaded_file ($image1_tmp_name,"upload/$image1_name");
            echo 'uploaded';
<<<<<<< HEAD
            
            $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
            mysqli_set_charset($con, "utf8");
            //echo 'ติดต่อฐานช้อมูลได้';
            mysqli_select_db($con,'main');
            $sql = "INSERT INTO two (imgname,img1,img2) 
		VALUES('$imgname','$image_name','$image1_name')";
		
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
=======
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
>>>>>>> 700b7d4e26d0b1f7c2b88eb2f98da65acd9ffb68
	mysqli_close($con);}   }
?>
      
     
