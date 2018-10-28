
<?php
require 'index.php';
$item_id = $_GET['item_id'];
$qus = "select * from items where item_id='$item_id'";
$resus = mysqli_query($con, $qus);
$rowus = mysqli_fetch_array($resus,MYSQLI_ASSOC);

?>

    <!DOCTYPE html>
<?php include 'lockpage.php';?>
<div id="wrapper">
     <?php include('menu.php');?>
    <div class="container-fluid">
        <form action="" method="POST" enctype="multipart/form-data">
           
                <label><b>ยี่ห้อ</b></label>
                <input type="radio" name="brand_id" value="1" id="brand_id" <?php if ($rowus['brand_id']=='1') echo 'checked';  ?> >Canon    
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="2" id="brand_id" <?php if ($rowus['brand_id']=='2') echo 'checked';  ?> >Fujifilm
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="3" id="brand_id" <?php if ($rowus['brand_id']=='3') echo 'checked';  ?> >Leica
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="4" id="brand_id" <?php if ($rowus['brand_id']=='4') echo 'checked';  ?> >Nikon
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="5" id="brand_id" <?php if ($rowus['brand_id']=='5') echo 'checked';  ?> >Olympus
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="6" id="brand_id" <?php if ($rowus['brand_id']=='6') echo 'checked';  ?> >Sony
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="8" id="brand_id" <?php if ($rowus['brand_id']=='8') echo 'checked';  ?> >Gopro
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="7" id="brand_id" <?php if ($rowus['brand_id']=='7') echo 'checked';  ?> >etc.
                
                <label><b>รูปแบบอุปกรณ์</b></label>
                <input type="radio" name="option_id" value="1" id="option_id" <?php if ($rowus['option_id']=='1') echo 'checked';  ?> >
                Body    
                <input type="radio" name="option_id" value="2" id="option_id" <?php if ($rowus['option_id']=='2') echo 'checked';  ?> >
                Body+Lense
                <input type="radio" name="option_id" value="3" id="option_id" <?php if ($rowus['option_id']=='3') echo 'checked';  ?> >
                Lense
                <input type="radio" name="option_id" value="4" id="option_id" <?php if ($rowus['option_id']=='4') echo 'checked';  ?> >
                Accessory
                <label><b>ประเภทสินค้า</b></label>
                <input type="radio" name="type_id" value="1" id="type_id" <?php if ($rowus['type_id']=='1') echo 'checked';  ?> >
                DSLR 
                <input type="radio" name="type_id" value="2" id="type_id" <?php if ($rowus['type_id']=='2') echo 'checked';  ?> >
                Mirrorless 
                <input type="radio" name="type_id" value="3" id="type_id" <?php if ($rowus['type_id']=='3') echo 'checked';  ?> >
                Video 
                <input type="radio" name="type_id" value="4"id="type_id" <?php if ($rowus['type_id']=='4') echo 'checked';  ?> >
                Action 
                <input type="radio" name="type_id" value="5" id="type_id" <?php if ($rowus['type_id']=='5') echo 'checked';  ?> >
                Accessories
                
                <label>สถานะ</label>
                    
                <input type="radio" name="status_id" value="1" id="status_id" <?php if ($rowus['status_id']=='1') echo 'checked';  ?> >
                        พร้อมใช้งาน
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="2" id="status_id" <?php if ($rowus['status_id']=='2') echo 'checked';  ?> >
                        ชำรุด
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="3" id="status_id" <?php if ($rowus['status_id']=='3') echo 'checked';  ?> >
                        กำลังซ่อมแซม
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="4" id="status_id" <?php if ($rowus['status_id']=='4') echo 'checked';  ?> >
                        หาย
                <div class="form-group">
                <label class="col-form-label" >Model:</label><input class="form-control" name="item_model" type="text" id="item_model" size="20" value="<?php echo $rowus['item_model']; ?>">
                <label class="col-form-label">ชื่อรุ่น:</label><input class="form-control" name="item_name" type="text" id="item_name" size="49" value="<?php echo $rowus['item_name']; ?>" >
                <label class="col-form-label">Spec:</label><textarea class="form-control"  name="item_description"  id="item_description" cols="80" rows="5" wrap="soft"><?php echo $rowus['item_description']; ?></textarea>
               <div class="row">
                <div class="column" >
                 <table>
                     <td><b>ราคา</b></td></br>
                    <tr>
                         <td>ราคาเครื่อง :</td>
                         <td><input class="form-control"  name="item_price" type="text" id="item_price" size="21" value="<?php echo number_format($rowus['item_price']); ?>">บาท</td>
                    </tr>
                    <tr> 
                        <td>ราคาต่อวัน :</td> 
                         <td><input class="form-control" name="item_priceperday" type="text" id="item_priceperday" size="21" value="<?php echo number_format($rowus['item_priceperday']); ?>" >บาท/วัน</td>
                    </tr>
                 </table>
                </div>
                <div class="column" >  
                 <table>
                    <td><b>วงเงินประกัน</b></td></br>
                    <tr> 
                        <td>เงินประกันแบบที่1 :</td>
                        <td><input class="form-control" name="deposit_1" type="text" id="deposit_1" size="20" value="<?php echo number_format($rowus['deposit_1']); ?>"> บาท</td>
                    </tr>
                    <tr> <td>เงินประกันแบบที่2 :</td>
                        <td><input class="form-control" name="deposit_2" type="text" id="deposit_2" size="20" value="<?php echo  number_format($rowus['deposit_2']); ?>">  บาท</td>
                    </tr>
                <tr>
                    <th>รูปที่1  </th>
                    <td>
                    <img src="itempic/<?php echo ($rowus['img1']);?>" width="80px" height="60px">
                    <br>
                    <input type="file" name="img1"/>
                    <input type="hidden" name="old_image" value="<?php echo ($rowus['img1']);?>">
                    <!--<input type="submit" value="update" name='update'>-->
                    </td>
                </tr>
                 <tr>
                   <th>รูปที่2  </th>
                    <td>
                    <img src="itempic/<?php echo ($rowus['img2']);?>" width="80px" height="60px" >
                    <br>
                    <input type="file" name="img2"/><br>
                    <input type="hidden" name="old_image1" value="<?php echo ($rowus['img2']);?>">
                    <input type="hidden" name="item_id" value="<?php echo $rowus['item_id']; ?>">
                    <input type="submit" value="update" name='update'>
                    </td>
                </tr>
           
        </form>

    </body>
</html>    
<?php
    $random_digit=rand(0000,9999);
    if(isset($_POST['update'])){
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
    
    $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
            mysqli_set_charset($con, "utf8");
            mysqli_select_db($con,'main');
            $sql = "UPDATE items SET item_model='$item_model',item_name='$item_name',item_description='$item_description',option_id='$option_id',item_price='$item_price',item_priceperday='$item_priceperday',deposit_1='$deposit_1',deposit_2='$deposit_2',type_id='$type_id',brand_id='$brand_id',status_id='$status_id' WHERE item_id='$item_id'"; 
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
            
        if($_FILES['img1']['name']!="")
	{
            $image_name="img_".$imgname."-".$random_digit.date('m-d-Y_H:i:s')."-".$_FILES['img1']['name'];
            $image_type=$_FILES['img1']['type'];
            $image_size=$_FILES['img1']['size'];
            $image_tmp_name=$_FILES['img1']['tmp_name'];
            
		if(move_uploaded_file($_FILES["img1"]["tmp_name"],"itempic/$image_name"))
		{

			
			@unlink("itempic/".$_POST["old_image"]);

            $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
            mysqli_set_charset($con, "utf8");
            //echo 'ติดต่อฐานช้อมูลได้';
            mysqli_select_db($con,'main');
            $sql = "UPDATE items SET  img1='$image_name' WHERE item_id='$item_id'"; 
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
               }
        }
        if($_FILES['img2']['name']!="")
	{
            $image_name1="img_".$imgname."-".$random_digit.date('m-d-Y_H:i:s')."-".$_FILES['img2']['name'];
            $image_type1=$_FILES['img2']['type'];
            $image_size1=$_FILES['img2']['size'];
            $image_tmp_name1=$_FILES['img2']['tmp_name'];
            
		if(move_uploaded_file($_FILES["img2"]["tmp_name"],"itempic/$image_name1"))
		{
                    @unlink("itempic/".$_POST["old_image1"]);
                    $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
                    mysqli_set_charset($con, "utf8");
            //echo 'ติดต่อฐานช้อมูลได้';
                     mysqli_select_db($con,'main');
                        $sql = "UPDATE items SET  img2='$image_name1' WHERE item_id='$item_id'"; 
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
      
     
