<?php
require 'index.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>เพิ่มข้อมูลAdmin</title>
        <style>
            label{
                display: block;
            }
            
        </style>
    </head>
    <body>
        <h2>เพิ่มข้อมูลAdmin</h2>
        <form action="insertAdmin.php" method="post" enctype="mulitpart/form-data" id="form1">
            <fieldset>
                
                <label>Username</label><input name="Username" type="text" id="Username" size="20"  >
                <label>Password</label><input name="Password" type="text" id="Password" size="20"  >
                <label>Name</label><input name="Name" type="text" id="Name" size="20"  >
                <label>Lastname</label><input name="Lastname" type="text" id="Lastname" size="20"  >
                <label>Tel</label><input name="Tel" type="text" id="Tel" size="20"  >
                <label>Email</label><input name="Email" type="text" id="Email" size="50" >
                
                <label>สถานะ</label>
                    
                <input type="radio" name="Status" value="0" id="Status" >ไปซะ
                <input type="radio" name="Status" value="1" id="Status" >อยู่นี้
                        
                        <br>
                        
                       <input name="submit" type="submit" value="ยืนยัน">
            </fieldset>
        
        
    </body>
</html>
