

<?php
    require '../index.php';
    $item_id = $_GET['item_id'];
    $qq ="select * from items where item_id='$item_id'";
    $resitem= mysqli_query($con, $qq);
    $rowitem = mysqli_fetch_array($resitem,MYSQLI_ASSOC);
?>
<?php include '../lockpage.php';?>
<body>
<div id="wrapper">
     <?php include('menuDSLR.php');?>
    <div class="container-fluid">
        <h2>แก้ไขข้อมูล</h2>
        <form action="uptoBody.php" method="post" enctype="mulitpart/form-data" id="form1">
            <fieldset>
                
                <label><b>ยี่ห้อ</b></label>
                <input type="radio" name="brand_id" value="1" id="brand_id" <?php if ($rowitem['brand_id']=='1') echo 'checked';  ?> >Canon    
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="2" id="brand_id" <?php if ($rowitem['brand_id']=='2') echo 'checked';  ?> >Fujifilm
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="3" id="brand_id" <?php if ($rowitem['brand_id']=='3') echo 'checked';  ?> >Leica
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="4" id="brand_id" <?php if ($rowitem['brand_id']=='4') echo 'checked';  ?> >Nikon
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="5" id="brand_id" <?php if ($rowitem['brand_id']=='5') echo 'checked';  ?> >Olympus
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="6" id="brand_id" <?php if ($rowitem['brand_id']=='6') echo 'checked';  ?> >Sony
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="8" id="brand_id" <?php if ($rowitem['brand_id']=='8') echo 'checked';  ?> >Gopro
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="7" id="brand_id" <?php if ($rowitem['brand_id']=='7') echo 'checked';  ?> >etc.
                
                <label><b>รูปแบบอุปกรณ์</b></label>
                <input type="radio" name="option_id" value="1" id="option_id" <?php if ($rowitem['option_id']=='1') echo 'checked';  ?> >
                Body    
                <input type="radio" name="option_id" value="2" id="option_id" <?php if ($rowitem['option_id']=='2') echo 'checked';  ?> >
                Body+Lense
                <input type="radio" name="option_id" value="3" id="option_id" <?php if ($rowitem['option_id']=='3') echo 'checked';  ?> >
                Lense
                <input type="radio" name="option_id" value="4" id="option_id" <?php if ($rowitem['option_id']=='4') echo 'checked';  ?> >
                Accessory
                <label><b>ประเภทสินค้า</b></label>
                <input type="radio" name="type_id" value="1" id="type_id" <?php if ($rowitem['type_id']=='1') echo 'checked';  ?> >
                DSLR 
                <input type="radio" name="type_id" value="2" id="type_id" <?php if ($rowitem['type_id']=='2') echo 'checked';  ?> >
                Mirrorless 
                <input type="radio" name="type_id" value="3" id="type_id" <?php if ($rowitem['type_id']=='3') echo 'checked';  ?> >
                Video 
                <input type="radio" name="type_id" value="4"id="type_id" <?php if ($rowitem['type_id']=='4') echo 'checked';  ?> >
                Action 
                <input type="radio" name="type_id" value="5" id="type_id" <?php if ($rowitem['type_id']=='5') echo 'checked';  ?> >
                Accessories
                
                <label>สถานะ</label>
                    
                <input type="radio" name="status_id" value="1" id="status_id" <?php if ($rowitem['status_id']=='1') echo 'checked';  ?> >
                        พร้อมใช้งาน
                <input type="radio" name="status_id" value="2" id="status_id" <?php if ($rowitem['status_id']=='2') echo 'checked';  ?> >
                        ชำรุด
                <input type="radio" name="status_id" value="3" id="status_id" <?php if ($rowitem['status_id']=='3') echo 'checked';  ?> >
                        กำลังซ่อมแซม
                <input type="radio" name="status_id" value="4" id="status_id" <?php if ($rowitem['status_id']=='4') echo 'checked';  ?> >
                        หาย
                 
                <label>Model:</label><input name="item_model" type="text" id="item_model" size="20" value="<?php echo $rowitem['item_model']; ?>">
                <label>ชื่อรุ่น:</label><input name="item_name" type="text" id="item_name" size="49" value="<?php echo $rowitem['item_name']; ?>" >
                <label>Spec:</label><textarea  name="item_description"  id="item_description" cols="80" rows="5" wrap="soft"><?php echo $rowitem['item_description']; ?></textarea>
                <br>           
               
                <table>
                    <b>ราคา</b>
                    <tr>
                         <td>ราคาเครื่อง</td>
                         <td><input name="item_price" type="text" id="item_price" size="21" value="<?php echo $rowitem['item_price']; ?>" > บาท</td>
                    </tr>
                    <tr> 
                        <td>ราคาต่อวัน</td> 
                         <td><input name="item_priceperday" type="text" id="item_priceperday" size="21" value="<?php echo $rowitem['item_priceperday']; ?>" > บาท/วัน</td>
                    </tr>
                </table>
                <table>
                    <b>วงเงินประกัน</b>
                    <tr> <td>เงินประกันแบบที่1</td>
                        <td><input name="deposit_1" type="text" id="deposit_1" size="20" value="<?php echo $rowitem['deposit_1']; ?>" > บาท</td>
                    </tr>
                    <tr> <td>เงินประกันแบบที่2</td>
                        <td><input name="deposit_2" type="text" id="deposit_2" size="20" value="<?php echo $rowitem['deposit_2']; ?>"> บาท</td>
                    </tr>
                </table>
                
                <input type="hidden" name="item_id" value="<?php echo $rowitem['item_id']; ?>">
                <input name="submit" type="submit" value="ยืนยัน">
               
            </fieldset>
        </form>
</div>
</div>
