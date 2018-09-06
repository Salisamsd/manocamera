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
                <input type="radio" name="brand_id" value="1" id="brand_id">Canon    
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="2" id="brand_id">Fujifilm
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="3" id="brand_id">Leica
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="4" id="brand_id">Nikon
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="5" id="brand_id">Olympus
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="6" id="brand_id">Sony
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="8" id="brand_id">Gopro
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="7" id="brand_id">etc.
                <label>Model:</label><input name="item_model" type="text" id="item_model" size="20">
                <label>ชื่อรุ่น:</label><input name="item_name" type="text" id="item_model" size="30">
                <label>Spec:</label><textarea  form="item_description" name="item_description"  id="item_description" cols="50" rows="7" wrap="soft"></textarea>

                <label><b>รูปแบบอุปกรณ์</b></label>
                <?php
                    $q="SELECT * FROM option";
                    $result = mysqli_query($con, $q);
                ?>
                <select name="option_id" id="option_id">
                    <option value="">---เลือกรูปแบบ---</option>
                    <?php
                          while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
                             echo "<option value='$row[0]'>$row[1]</option>";
                          }
                    ?> 
                </select>               
                <label><b>ประเภทสินค้า</b></label>
                <?php
                    $q="SELECT * FROM types";
                    $result = mysqli_query($con, $q);
                ?>
                <select name="type_id" id="type_id">
                    <option value="">---เลือกประเภท---</option>
                    <?php
                          while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
                             echo "<option value='$row[0]'>$row[1]</option>";
                          }
                    ?> 
                </select>
                <br>
                <table>
                   
                    <tr>  <b>ราคา</b>
                          <td>ราคาเครื่อง</td>
                         <td><input name="price" type="text" id="price" size="21"> บาท</td>
                    </tr>
                    <tr> <td>ราคาต่อวัน</td> 
                         <td><input name="priceperday" type="text" id="priceperday" size="21"> บาท/วัน</td>
                    </tr></table>
                <table>
                    <b>วงเงินประกัน</b>
                    <tr> <td>เงินประกันแบบที่1</td>
                        <td><input name="deposit_1" type="text" id="deposit_1" size="20"> บาท</td>
                    </tr>
                    <tr> <td>เงินประกันแบบที่2</td>
                        <td><input name="deposit_2" type="text" id="deposit_2" size="20"> บาท</td>
                    </tr></table>
                        <label>สถานะ</label>
                    
                        <input type="radio" name="status_id" value="1" id="status_id">
                        พร้อมใช้งาน
                        <input type="radio" name="status_id" value="2" id="status_id">
                        ชำรุด
                        <input type="radio" name="status_id" value="3" id="status_id">
                        กำลังซ่อมแซม
                        <input type="radio" name="status_id" value="4" id="status_id">
                        หาย
                    
                <br>
                <input name="submit" type="submit" value="ยืนยัน">
            </fieldset>
        </form>
    </body>
</html>
