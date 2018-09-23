
    <head>
        <meta charset="UTF-8">
        <title>เพิ่มข้อมูลของ DSLR</title>
        <style>
            label{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <h2>DSLR</h2>
        <form enctype="multipart/form-data" action="addDSLR.php" method="POST">
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
                <input type="radio" name="type_id" value="1" id="type_id" checked="checked" > DSLR 
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
            <input name="dslr_name" type="text" id="dslr_name"  >             
            <label>Model:</label>
            <input name="dslr_model" type="text" id="dslr_model">
            <label>Spec:</label>
            <textarea  name="dslr_description"  id="dslr_description" cols="50" rows="7" wrap="soft"></textarea>
                <table>
                    <b>ราคา</b>
                    <tr>
                         <td>ราคาเครื่อง</td>
                         <td><input name="dslr_price" type="text" id="dslr_price" size="21"  > บาท</td>
                    </tr>
                    <tr> 
                        <td>ราคาต่อวัน</td> 
                         <td><input name="dslr_priceperday" type="text" id="dslr_priceperday" size="21"  > บาท/วัน</td>
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
