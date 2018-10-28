<?php

    require 'index.php';
    
    $UserID = $_GET['UserID'];
    
    $q = "DELETE FROM member WHERE UserID='$UserID'";
    
    $result = mysqli_query($con, $q);
    if($result){
       // echo 'ลบแล้ว' ;
        //echo "<hr>";
   //echo "<a href='List.php'>แสดงข้อมูล</a>";
    header("Location:main.php");
    } else {
        
        echo 'ผิดพลาด' . mysqli_error($con);
        
    }
    mysqli_close($con);