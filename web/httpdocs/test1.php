<?php
require 'index.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>เพิ่มข้อมูลขย</title>
        <style>
            label{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <h2>เพิ่ม</h2>
        <form action="db.php" method="post" enctype="mulitpart/form-data" id="form1">
            <fieldset>
               
          
                 
                <label>id_boat:</label><input name="id_boat" type="text" id="id_boat" size="20" >
                <label>boat_name:</label><input name="boat_name" type="text" id="boat_name" size="49"  >
                <label>id_line:</label><textarea  name="id_line"  id="id_line" cols="50" rows="7" wrap="soft"></textarea>
                <br> 
                       <input name="submit" type="submit" value="ยืนยัน">
            </fieldset>
        </form>
    </body>
</html>
