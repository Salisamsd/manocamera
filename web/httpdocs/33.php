<?php
require 'index.php';
$id= $_GET['id'];
$qus = "select *from two where id= '$id'";
$resus = mysqli_query($con, $qus);
$rowus = mysqli_fetch_array($resus,MYSQLI_ASSOC);

?>

    <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>เพิ่มรูปแบบ2รูปใน1แถว</title>
        <style>
            label{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <table align='center' style="margin-top:50px">
                <tr>
                    <th>ชื่อรูป : </th>
                    <td>
                    <input type="text" id="imgname" name="imgname"  value="<?php echo ($rowus['imgname']);?>" >
                    <input type="text" id="imgname" name="imgname1"  value="<?php echo ($rowus['imgname1']);?>" >
                    </td>
                </tr>
                <tr>
                    <th>รูปที่1  </th>
                    <td>
                    <img src="upload/<?php echo ($rowus['img1']);?>" width="80px" height="60px">
                    <br>
                    <input type="file" name="img1"/>
                    <input type="hidden" name="old_image" value="<?php echo ($rowus['img1']);?>">
                    <!--<input type="submit" value="update" name='update'>-->
                    </td>
                </tr>
                 <tr>
                   <th>รูปที่2  </th>
                    <td>
                    <img src="upload/<?php echo ($rowus['img2']);?>" width="80px" height="60px" >
                    <br>
                    <input type="file" name="img2"/><br>
                    <input type="hidden" name="old_image1" value="<?php echo ($rowus['img2']);?>">
                    
                    <input type="submit" value="update" name='update'>
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>    
<?php
    $random_digit=rand(0000,9999);
    if(isset($_POST['update'])){
    $imgname=$_POST['imgname'];
    $imgname1=$_POST['imgname1'];
    $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
            mysqli_set_charset($con, "utf8");
            mysqli_select_db($con,'main');
            $sql = "UPDATE two SET imgname='$imgname',imgname1='$imgname1' WHERE id='$id'"; 
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
            
        if($_FILES['img1']['name']!="")
	{
            $image_name="img_".$imgname."-".$random_digit.date('m-d-Y_H:i:s')."-".$_FILES['img1']['name'];
            $image_type=$_FILES['img1']['type'];
            $image_size=$_FILES['img1']['size'];
            $image_tmp_name=$_FILES['img1']['tmp_name'];
            
		if(move_uploaded_file($_FILES["img1"]["tmp_name"],"upload/$image_name"))
		{

			
			@unlink("upload/".$_POST["old_image"]);

            $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
            mysqli_set_charset($con, "utf8");
            //echo 'ติดต่อฐานช้อมูลได้';
            mysqli_select_db($con,'main');
            $sql = "UPDATE two SET  img1='$image_name'  WHERE id='$id'"; 
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
               }
        }
        if($_FILES['img2']['name']!="")
	{
            $image_name1="img_".$imgname."-".$random_digit.date('m-d-Y_H:i:s')."-".$_FILES['img2']['name'];
            $image_type1=$_FILES['img2']['type'];
            $image_size1=$_FILES['img2']['size'];
            $image_tmp_name1=$_FILES['img2']['tmp_name'];
            
		if(move_uploaded_file($_FILES["img2"]["tmp_name"],"upload/$image_name1"))
		{
                    @unlink("upload/".$_POST["old_image1"]);
                    $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
                    mysqli_set_charset($con, "utf8");
            //echo 'ติดต่อฐานช้อมูลได้';
                     mysqli_select_db($con,'main');
                        $sql = "UPDATE two SET  img2='$image_name1'  WHERE id='$id'"; 
                    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
               }
            }
    }
    
    
    
    
    if($result){
                        echo "<script>";
                        echo "alert(\" แก้ไขข้อมูลสำเร็จ\");"; 
                        echo "window.location.href = '22.php'";
                        echo "</script>";
   }
      
   
    mysqli_close($con);  
              
   
?>
      
     
