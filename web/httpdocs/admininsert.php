<?php
	session_start();
	
	
	$serverName = "localhost";
	$userName = "manocame";
	$userPassword = "Pern1234";
	$dbName = "main";
	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
        if($_SESSION['UserID'] == "1")
	{
                echo "<script>";
                echo "alert(\"สวัสดีคะ!\");";
                echo "</script>";
		
	}	
        else {
             echo "<script>";
                echo "alert(\"คุณไม่มีสิทธิ์ในการเพิ่ม/แก้ไขข้อมูลพนักงาน!\");";
                echo "window.history.back()";
                
                echo "</script>";
        } mysqli_close($objCon);
?>
<?php include 'lockpage.php';?>
<div id="wrapper">
    <?php include('menu.php');?>
    
    <div class="container-fluid" >
        <form action="insertAdmin.php" method="post" enctype="mulitpart/form-data" id="form1">
  <fieldset>
    <legend>เพิ่มข้อมูลAdmin</legend>
    
            <div class="form-group">
                <label class="col-form-label" >รหัสพนักงาน</label>
                    <input class="form-control" name="User_num" type="text" id="User_num" size="20"  >
                <label class="col-form-label" >Username</label>
                    <input class="form-control" name="Username" type="text" id="Username" size="20"  >
                <label class="col-form-label" >Password</label>
                    <input class="form-control" name="Password" type="text" id="Password" size="20"  >
                <label class="col-form-label" >Name</label>
                    <input class="form-control" name="Name" type="text" id="Name" size="20"  >
                <label class="col-form-label" >Lastname</label>
                    <input class="form-control" name="Lastname" type="text" id="Lastname" size="20"  >
                <label class="col-form-label" >Tel</label>
                    <input class="form-control" name="Tel" type="text" id="Tel" size="20"  >
                <label class="col-form-label" >Email</label>
                    <input class="form-control" name="Email" type="text" id="Email" size="50" >
                <label >ที่อยู่</label>
                <textarea class="form-control" id="exampleTextarea" rows="3" id="A_Address" name="A_Address"></textarea>
      
                <label>สถานะ</label>
                    
                <input type="radio" name="Status" value="1" id="Status" checked="checked" > ผ่านการคัดเลือก
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                <input name="img1" type="file" /><br>
                        <br>
                       <input type="submit" name="upload" value="ยืนยัน">
            
    
  </fieldset>
</form>
    </div>
