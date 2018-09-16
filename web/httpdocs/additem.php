<?php

   $fileName=$_FILES["file1"]["name"];
   $fileTmpLoc =$_FILES["file1"]["tmp_name"];
   $fileType=$_FILES["file1"]["200000000"];
   $fileErrorMsg=$_FILES["file1"]["error"];
   if(!$fileTmpLoc){
       echo "ERROR:Please browe for a file  ";
       exit();
   }
   if(move_uploaded_file($fileTmpLoc,"upload/$fileName")){
       echo"$fileName Upload is complete";
   }else{
       echo"False";
   }
         $con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo'. mysqli_connect_error());
        mysqli_set_charset($con, "utf8");
        //echo 'ติดต่อฐานช้อมูลได้';
        mysqli_select_db($con,'main');
        $sql ="INSERT INTO items (image)"
                . " VALUES ('$fileName')";
        $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
        mysqli_close($con);
	
	