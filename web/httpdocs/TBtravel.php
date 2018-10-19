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
        <h2>เพิ่มสถานที่</h2>
        <form enctype="multipart/form-data" action="addTB.php" method="POST">
     
              
                <label>ชื่อสถานที่:</label><input name="Place_name" type="text" id="Place_name" size="20" >
<<<<<<< HEAD
                <label>ข้อมูลเพิ่มเติม:</label><textarea name="explains"  id="explains" cols="40" rows="7" wrap="soft"></textarea>
=======
                
>>>>>>> 700b7d4e26d0b1f7c2b88eb2f98da65acd9ffb68
                <br>           
               
               <label>รูป</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
            <input name="file1" type="file" /><br>
<<<<<<< HEAD
            <input name="file2" type="file" /><br>
            <input name="file3" type="file" /><br>
=======
            
>>>>>>> 700b7d4e26d0b1f7c2b88eb2f98da65acd9ffb68
    <input type="submit" name="upload" value="Send File" />
    
</form>

    </body>
</html>    
        
    



