<?php
require 'index.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>เพิ่มข้อมูลเข้าจ้า</title>
        <style>
            label{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <h2>AddData</h2>
        <form action="db.php" method="post" enctype="mulitpart/form-data" id="form1">
            <fieldset>
               			
					<label>lattitude:</label><input name="lat" type="text" id="lat"  size="30" >
				<label>longtitude:</label><input name="lon" type="text" id="lon"  size="30" >
          			
                 <label>type:</label><input name="type" type="text" id="type" size="20" >
                <label>id_boat:</label><input name="id_boat" type="text" id="id_boat" size="20" >
                
                <label>id_line:</label><textarea  name="id_line"  id="id_line" cols="20"  wrap=""></textarea>
                <br> 
                       <input name="submit" type="submit" value="ยืนยัน">
            </fieldset>
        </form>
    </body>
</html>
