
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DSLR</title>
    <script type="text/javascript" src="css/jquery-3.3.1.min.js"></script>

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
     label{
                display: block;
            }
            
   body{
    background:#f9f9f9;
    
}
#wrapper{
    padding:90px 15px;
    
}
.navbar-expand-lg .navbar-nav.side-nav{
    flex-direction: column;
    
}
.card{
    margin-bottom: 15px; border-radius:0; box-shadow: 0 3px 5px rgba(0,0,0,.1); 
    
}
.header-top{
    box-shadow: 0 3px 5px rgba(0,0,0,.1);
    background:#FF6600;
}
@media(min-width:992px) {
#wrapper{
    margin-left: 200px;padding: 90px 15px 15px;
    }
.navbar-nav.side-nav{
    background: #585f66;
    box-shadow: 2px 1px 2px rgba(0,0,0,.1);
    position:fixed;top:56px;
    flex-direction: column!important;
    left:0;width:200px;
    overflow-y:auto;
    bottom:0;
    overflow-x:hidden;
    padding-bottom:40px}
}
 .icon {
width:25px;
height:30px;
 }
 
 .icon1 {
width:20px;
height:20px;
 }
</style>
</head>
<body>
<div id="wrapper">
    <?php include('menu.php');?>
    <div class="container-fluid">
        <h2>DSLR</h2>
        <form enctype="multipart/form-data" action="addDSLR.php" method="POST">
           <fieldset>  
            
                <label><b>ยี่ห้อ</b></label>
                <input type="radio" name="brand_id" value="1" id="brand_id"  >Canon    
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="2" id="brand_id"  >Fujifilm
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="3" id="brand_id"  >Leica
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="brand_id" value="4" id="brand_id"  >Nikon
                <br>
              
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
                         <td><input name="dslr_price" type="text" id=dslr_price" size="21"  > บาท</td>
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
      
        
    </div>
     
    </div>
</body>
</html>

