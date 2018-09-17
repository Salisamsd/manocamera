<?php
    require'index.php';
    $Username =$_POST['Username'];
    $Password =$_POST['Password'];
    $Name =$_POST['Name'];
    $Lastname =$_POST['Lastname'];
    $Tel =$_POST['Tel'];
    $Email =$_POST['Email'];
    $Status =$_POST['Status'];
    
    $q =" INSERT INTO member(Username,Password,Name,Lastname,Tel,Email,Status) VALUES ('$Username','$Password','$Name','$Lastname','$Tel','$Email','$Status')";
    $result = mysqli_query($con,$q);
    if($result) {
        echo "เพิ่มข้อมูลเรียบร้อย";}
else{
    echo "เกิดข้อผิดพลาด".mysqli_error($con);
    
}
mysqli_close($con);
?>