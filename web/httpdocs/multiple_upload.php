 <?php
 
    $imgname=$_POST['imgname'];
    $imgname1=$_POST['imgname1'];
    $random_digit=rand(0000,9999);
    if(isset($_POST['upload'])){
        $image_name="img_".$imgname."-".$random_digit.date('m-d-Y_H:i:s')."-".$_FILES['img1']['name'];
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
        $image1_name= "img_".$imgname."-".$random_digit."-".date('m-d-Y_H:i:s').$_FILES['img2']['name'];
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
            
            $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
            mysqli_set_charset($con, "utf8");
            //echo 'ติดต่อฐานช้อมูลได้';
            mysqli_select_db($con,'main');
            $sql = "INSERT INTO two (imgname,imgname1,img1,img2) 
		VALUES('$imgname','$imgname1','$image_name','$image1_name')";
		
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);}   }
?>
      
     
