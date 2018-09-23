<?php include '../lockpage.php';?>
<body>
<div id="wrapper">
     <?php include('menuDSLR.php');?>
    <div class="container-fluid">
        <h2>DSLR</h2>
        <form enctype="multipart/form-data" action="addBL.php" method="POST">
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
                
                <input type="radio" name="option_id" value="2" id="option_id" checked="checked" >
                Body+Lense
                
                <label><b>ประเภทสินค้า</b></label>
                <input type="radio" name="type_id" value="1" id="type_id" checked="checked"> DSLR 
                
                
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
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
            <input name="file1" type="file" /><br>
            
    <input type="submit" value="Send File" />
    </fieldset>
</form>
      
        
    </div>
     
    </div>
</body>


