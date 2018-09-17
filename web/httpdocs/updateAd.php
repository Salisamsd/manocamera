
<?php
  require'index.php';
  $UserID =$_POST['UserID'];
  $Username =$_POST['Username'];
  $Password =$_POST['Password'];
  $Name =$_POST['Name'];
  $Lastname =$_POST['Lastname'];
  $Tel =$_POST['Tel'];
  $Email =$_POST['Email'];
  $Status =$_POST['Status'];
  
  $q="update member set UserID='$UserID',Username='$Username',Password='$Password',Name='$Name',Lastname='$Lastname',Tel='$Tel',Email='$Email',Status='$Status' where UserID='$UserID'";
   $result = mysqli_query($con, $q);
   if($result){
   echo "แก้ไขข้อมูลเรียบร้อย";
   echo "<hr>";
   echo "<a href='listAdmin.php'>แสดงข้อมูล</a>";
   }else{
       echo "เกิดข้อผิดพลาด".mysqli_error($con);
      
   }
   mysqli_close($con);
