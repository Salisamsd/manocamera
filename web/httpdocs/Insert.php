<?php
require 'index.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>เพิ่มข้อมูลของอุปกรณ์</title>
        <style>
            label{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <h2>เพิ่มข้อมูลอุปกรณ์</h2>
        <form action="additem.php" method="post" enctype="mulitpart/form-data" id="form1">
            <fieldset>
                
                <label><b>ยี่ห้อ</b></label>
                <input type="radio" name="brand_id" value="1" id="brand_id"  >Canon    
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="2" id="brand_id"  >Fujifilm
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="3" id="brand_id"  >Leica
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="4" id="brand_id"  >Nikon
                <br><br>
                <input type="radio" name="brand_id" value="5" id="brand_id"  >Olympus
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="6" id="brand_id"  >Sony
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="8" id="brand_id"  >Gopro
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="7" id="brand_id"  >etc.
                
                <label><b>รูปแบบอุปกรณ์</b></label>
                <input type="radio" name="option_id" value="1" id="option_id"  >
                Body    
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="option_id" value="2" id="option_id"  >
                Body+Lense
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="option_id" value="3" id="option_id"  >
                Lense
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="option_id" value="4" id="option_id"  >
                Accessory
                <label><b>ประเภทสินค้า</b></label>
                <input type="radio" name="type_id" value="1" id="type_id"  >
                DSLR 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type_id" value="2" id="type_id"  >
                Mirrorless 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type_id" value="3" id="type_id"  >
                Video 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type_id" value="4"id="type_id"   >
                Action 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type_id" value="5" id="type_id"  >
                Accessories
                
                <label>สถานะ</label>
                    
                <input type="radio" name="status_id" value="1" id="status_id"  >
                        พร้อมใช้งาน
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="2" id="status_id"  >
                        ชำรุด
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="3" id="status_id"  >
                        กำลังซ่อมแซม
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="4" id="status_id"  >
                        หาย
                 
                <label>Model:</label><input name="item_model" type="text" id="item_model" size="20" >
                <label>ชื่อรุ่น:</label><input name="item_name" type="text" id="item_name" size="49"  >
                <label>Spec:</label><textarea  name="item_description"  id="item_description" cols="50" rows="7" wrap="soft"></textarea>
                <br>           
               
                <table>
                    <b>ราคา</b>
                    <tr>
                         <td>ราคาเครื่อง</td>
                         <td><input name="item_price" type="text" id="item_price" size="21"  > บาท</td>
                    </tr>
                    <tr> 
                        <td>ราคาต่อวัน</td> 
                         <td><input name="item_priceperday" type="text" id="item_priceperday" size="21"  > บาท/วัน</td>
                    </tr>
                </table>
                <table>
                    <b>วงเงินประกัน</b>
                    <tr> <td>เงินประกันแบบที่1</td>
                        <td><input name="deposit_1" type="text" id="deposit_1" size="20"  > บาท</td>
                    </tr>
                    <tr> <td>เงินประกันแบบที่2</td>
                        <td><input name="deposit_2" type="text" id="deposit_2" size="20" > บาท</td>
                    </tr>
                </table>
                
                <label>รูปภาพ</label>
                <input type="file" name="item_image"/> <br>
                <input type="hidden" name="item_id" value="<?php echo $rowitem['item_id']; ?>">
                <input name="submit" type="submit" value="ยืนยัน">
               
            </fieldset>
        </form>
    </body>
</html>
