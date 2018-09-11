<?php
require 'index.php';
$ft_id = $_GET['ft_id'];
$q ='select * from freeitems where ft_id="ft_id"';
$res=mysqli_query($con, $q);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
       
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>แก้ไขข้อมูลของอุปกรณ์ที่ให้ไปด้วย</title>
        <style>
            label{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <h2>เพิ่มข้อมูลอุปกรณ์</h2>
        <form action="updatefreeitem.php" method="post" enctype="mulitpart/form-data" id="form1">
            <fieldset>
               
          
                 
                <label>Model:</label>
                <input name="ft_model" type="text" id="ft_model" size="20" value="<?php echo $row['ft_model']; ?>" >
                <label>เป็นของ:</label><input name="item_id" type="text" id="item_id" size="49" value="<?php echo $row['item_id']; ?>" >
                <label>ข้อมูล:</label><textarea  name="ft_name"  id="ft_name" cols="50" rows="7" wrap="soft"><?php echo $row['ft_name']; ?></textarea>
                <br>           
               
                
                
                
                 <label>สถานะ</label>
                    
                <input type="radio" name="status_id" value="1" id="status_id" <?php if ($rowft['status_id']=='1') echo 'checked';  ?>  >
                        พร้อมใช้งาน
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="2" id="status_id" <?php if ($rowft['status_id']=='2') echo 'checked';  ?> >
                        ชำรุด
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="3" id="status_id" <?php if ($rowft['status_id']=='3') echo 'checked';  ?>  >
                        กำลังซ่อมแซม
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="4" id="status_id" <?php if ($rowft['status_id']=='4') echo 'checked';  ?> >
                        หาย
                        
                       <input name="submit" type="submit" value="ยืนยัน">
            </fieldset>
        </form>
    </body>
</html>
