 <?php
    require 'index.php';
    $ml_id = $_GET['ml_id'];
    $qm ="select * from mirrorless where ml_id='$ml_id'";
    $resml= mysqli_query($con, $qm);
    $rowml = mysqli_fetch_array($resml,MYSQLI_ASSOC);
?>
<head>
    <meta charset="UTF-8">
    <title>เพิ่มข้อมูลของ Mirrorless</title>
    <style>
        label{
            display: block;
        }
        
    </style>
</head>
<body>
    <h2>Mirrorless</h2>
    <form enctype="multipart/form-data" action="updateML.php" method="POST">
       <fieldset>  
        
            <label><b>ยี่ห้อ</b></label>
            <input type="radio" name="brand_id" value="1" id="brand_id" <?php if ($rowml['brand_id']=='1') echo 'checked';  ?> >Canon    
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="2" id="brand_id" <?php if ($rowml['brand_id']=='2') echo 'checked';  ?> >Fujifilm
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="3" id="brand_id" <?php if ($rowml['brand_id']=='3') echo 'checked';  ?> >Leica
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="4" id="brand_id" <?php if ($rowml['brand_id']=='4') echo 'checked';  ?> >Nikon
            <br>
            <label><b>รูปแบบอุปกรณ์</b></label>
            <input type="radio" name="option_id" value="1" id="option_id"<?php if ($rowml['option_id']=='1') echo 'checked';  ?>  >
            Body    
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="option_id" value="2" id="option_id" <?php if ($rowml['option_id']=='2') echo 'checked';  ?> >
            Body+Lense
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="option_id" value="3" id="option_id" <?php if ($rowml['option_id']=='3') echo 'checked';  ?> >
            Lense
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="option_id" value="4" id="option_id"<?php if ($rowml['option_id']=='4') echo 'checked';  ?>  >
            Accessory
            <label><b>ประเภทสินค้า</b></label>
            <input type="radio" name="type_id" value="1" id="type_id" checked="checked"<?php if ($rowml['type_id']=='1') echo 'checked';  ?> > Mirrorless 
            <label>สถานะ</label>
            <input type="radio" name="status_id" value="1" id="status_id"<?php if ($rowml['status_id']=='1') echo 'checked';  ?>  >
                    พร้อมใช้งาน
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="2" id="status_id" <?php if ($rowml['status_id']=='2') echo 'checked';  ?> >
                    ชำรุด
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="3" id="status_id" <?php if ($rowml['status_id']=='3') echo 'checked';  ?> >
                    กำลังซ่อมแซม
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="4" id="status_id" <?php if ($rowml['status_id']=='4') echo 'checked';  ?> >
                    หาย
        <label>ชื่อรุ่น:</label>
        <input name="ml_name" type="text" id="ml_name" value="<?php echo $rowml['ml_name'];?>" >             
        <label>Model:</label>
        <input name="ml_model" type="text" id="ml_model" value="<?php echo $rowml['ml_model']; ?>" >
        <label>Spec:</label>
        <textarea  name="ml_description"  id="ml_description" cols="50" rows="7" wrap="soft"></textarea> <?php echo $rowml['ml_model']; ?>
            <table>
                <b>ราคา</b>
                <tr>
                     <td>ราคาเครื่อง</td>
                     <td><input name="ml_price" type="text" id="ml_price" size="21" value="<?php echo $rowml['ml_price']; ?>"  > บาท</td>
                </tr>
                <tr> 
                    <td>ราคาต่อวัน</td> 
                    <td><input name="ml_priceperday" type="text" id="ml_priceperday" size="21" value="<?php echo $rowml['ml_priceperday']; ?>" > บาท/วัน</td>
                </tr>
            </table>
            <table>
                <b>วงเงินประกัน</b>
                <tr> <td>เงินประกันแบบที่1</td>
                    <td><input name="deposit_1" type="text" id="deposit_1" size="20"value="<?php echo $rowml['deposit_l']; ?>"  > บาท</td>
                </tr>
                <tr> <td>เงินประกันแบบที่2</td>
                    <td><input name="deposit_2" type="text" id="deposit_2" size="20"value="<?php echo $rowml['deposit_2']; ?>" > บาท</td>
                </tr>
            </table>
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
        <input name="file1" type="file" /><br>
        
<input type="submit" value="Send File" />
</fieldset>
</form>
  
   
</body>
</html>

