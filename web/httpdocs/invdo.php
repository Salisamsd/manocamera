<head>
        <meta charset="UTF-8">
        <title>เพิ่มข้อมูลของ Video</title>
        <style>
            label{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <h2>Video</h2>
        <form enctype="multipart/form-data" action="addvdo.php" method="POST">
           <fieldset>  
            
                <label><b>ยี่ห้อ</b></label>
                <input type="radio" name="brand_id" value="1" id="brand_id"  >Canon    
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="2" id="brand_id"  >Fujifilm
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="3" id="brand_id"  >Leica
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="4" id="brand_id"  >Nikon
                <br>
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
                <input type="radio" name="type_id" value="1" id="type_id" checked="checked" > Video
                <label>สถานะ</label>
                <input type="radio" name="status_id" value="1" id="status_id"  >
                        พร้อมใช้งาน
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="2" id="status_id"  >
                        ชำรุด
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="3" id="status_id"  >
                        กำลังซ่อมแซม
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status_id" value="4" id="status_id"  >
                        หาย
            <label>ชื่อรุ่น:</label>
            <input name="vdo_name" type="text" id="vdo_name"  >             
            <label>Model:</label>
            <input name="vdo_model" type="text" id="vdo_model">
            <label>Spec:</label>
            <textarea  name="vdo_description"  id="vdo_description" cols="50" rows="7" wrap="soft"></textarea>
                <table>
                    <b>ราคา</b>
                    <tr>
                         <td>ราคาเครื่อง</td>
                         <td><input name="vdo_price" type="text" id="vdo_price" size="21"  > บาท</td>
                    </tr>
                    <tr> 
                        <td>ราคาต่อวัน</td> 
                         <td><input name="vdo_priceperday" type="text" id="vdo_priceperday" size="21"  > บาท/วัน</td>
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
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
            <input name="file1" type="file" /><br>
            
    <input type="submit" value="Send File" />
    </fieldset>
</form>
      
       
    </body>
</html>
