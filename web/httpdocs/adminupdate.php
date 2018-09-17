<?php
require 'index.php';
$UserID= $_GET['UserID'];
$qus = "select *from member where UserID= '$UserID'";
$resus = mysqli_query($con, $qus);
$rowus = mysqli_fetch_array($resus,MYSQLI_ASSOC);
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>แก้ไขข้อมูลAdmin</title>
        <style>
            label{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <h2>แก้ไขข้อมูลAdmin</h2>
        <form action="updateAd.php" method="post" enctype="mulitpart/form-data" id="form1">
            <fieldset>
                
                <label>Username</label><input name="Username" type="text" id="Username" size="20" value="<?php echo $rowus['Username']; ?>" >
                <label>Password</label><input name="Password" type="text" id="Password" size="20" value="<?php echo $rowus['Password']; ?>" >
                <label>Name</label><input name="Name" type="text" id="Name" size="20" value="<?php echo $rowus['Name']; ?>" >
                <label>Lastname</label><input name="Lastname" type="text" id="Lastname" size="20" value="<?php echo $rowus['Lastname']; ?>" >
                <label>Tel</label><input name="Tel" type="text" id="Tel" size="20" value="<?php echo $rowus['Tel']; ?>" >
                <label>Email</label><input name="Email" type="text" id="Email" size="50" value="<?php echo $rowus['Email']; ?>" >
                
                <label>สถานะ</label>
                    
                <input type="radio" name="Status" value="0" id="Status" <?php if ($rowus['Status']=='0') echo 'checked';  ?> >
                        ไปหน้าอื่นซะ
                <input type="radio" name="Status" value="1" id="Status" <?php if ($rowus['Status']=='1') echo 'checked';  ?> >
                        อยู่นี้ซะ
                        
                        <br>
                        <input type="hidden" name="UserID" value="<?php echo $rowus['UserID']?>">
                       <input name="submit" type="submit" value="ยืนยัน">
            </fieldset>
        
        
    </body>
</html>
