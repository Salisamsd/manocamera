<?php
require 'index.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>เพิ่มข้อมูลของอุปกรณ์ที่ให้ไปด้วย</title>
        <style>
            label{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <h2>เพิ่มข้อมูลอุปกรณ์</h2>
        <form action="addfreeitem.php" method="post" enctype="mulitpart/form-data" id="form1">
            <fieldset>
               
          
                 
                <label>Model:</label><input name="ft_model" type="text" id="ft_model" size="20" >
                <label>เป็นของ:</label><input name="item_id" type="text" id="item_id" size="49"  >
                <label>ข้อมูล:</label><textarea  name="ft_name"  id="ft_name" cols="50" rows="7" wrap="soft"></textarea>
                <br>           
               
                
                
                
                 <label>สถานะ</label>
                    
                <input type="radio" name="status_id" value="1" id="status_id"  >
                        พร้อมใช้งาน
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="2" id="status_id"  >
                        ชำรุด
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="3" id="status_id"  >
                        กำลังซ่อมแซม
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="4" id="status_id"  >
                        หาย
                        <br>
                       <input name="submit" type="submit" value="ยืนยัน">
            </fieldset>
        </form>
    </body>
</html>
