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
        <h2>เพิ่มรูปแบบ2รูปใน1แถว</h2>
        <form enctype="multipart/form-data" action="multiple_upload.php" method="POST">
            <label>ชื่อ:</label><input name="imgname" type="text" id="imgname" size="20" ><br>
            เพิ่มรูป 1:<input name="img1" type="file" /><br>
            เพิ่มรูป 2:<input name="img2" type="file" /><br>
            <input type="submit" name="upload" value="Send File" />
                <!--<label>ชื่อสถานที่:</label><input name="Place_name" type="text" id="Place_name" size="20" >
                
                <br>           
               
               <label>รูป</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
            <input name="file1" type="file" /><br>
			<input name="file2" type="file" /><br>
			<input name="file3" type="file" /><br>-->
    
            
    
    
</form>

    </body>
</html>    
        
    



