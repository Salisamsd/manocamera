<!DOCTYPE html>
<?php
  require 'index.php';//ตัวเชื่อมหน้า index
  $qa = ' select * from TBtravel ';
  $result = mysqli_query($con,$qa);//แสดงผลจากหน้าหลักและqa
  mysqli_set_charset($con, "utf8");//setภาษาthai
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>แสดงสถานที่</title>
        <style>
            table,th,td{
                border: 1px solid black;
                border-collapse: collapse;
                
            }
        </style>
    </head>
    <body>
		
<<<<<<< HEAD
        <table border="1"  ><a href="TBtravel.php"  align="center">เพิ่ม</a>
            <tr>
                
                 <!--thคือคอลัมน์-->
                <th width="40%"  >รหัสสถานที่</th>
                <th  width="40%" >ชื่อสถานที่</th>
                <th  width="40%" >รายละเอียด</th>
		<th width="40%">รูปภาพ</th>
                <th width="40%">รูปภาพ</th>
                <th width="40%">รูปภาพ</th>
=======
        <table border="1"  align="center"  width="60%" ><a href="TBtravel.php"  align="center">เพิ่ม</a>
            <tr>
                
                 <!--thคือคอลัมน์-->
               <th width="40%"  >รหัสสถานที่</th>
                <th  width="40%" >ชื่อสถานที่</th>
				<th width="40%">รูปภาพ</th>
                <!--<th width="40%">รูปภาพ</th>-->
>>>>>>> 700b7d4e26d0b1f7c2b88eb2f98da65acd9ffb68
            </tr>
            <?php //ประกาศให้rowเอาค่าของdatabaseดึงออกมา
                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
            <tr>
                <td><?php echo ($row['Place_id']);?></td>
                <td><?php echo ($row['Place_name']);?></td>
<<<<<<< HEAD
                <td><?php echo ($row['explains']);?></td>
                <td align="center" ><img src="/TB_Travel/<?php echo  $row['Place_img']; ?>"width="250px" height="250px"></td>
               <td align="center" ><img src="/TB_Travel/<?php echo  $row['Place_img2']; ?>"width="250px" height="250px"></td>
               <td align="center" ><img src="/TB_Travel/<?php echo  $row['Place_img3']; ?>"width="250px" height="250px"></td>
=======
                <td align="center" ><img src="/TB_Travel/<?php echo  $row['Place_img']; ?>"width="250px" height="250px"></td>
               <!--<td align="center" ><img src="/TB_Travel/<?php echo  $row['Place_img2']; ?>"width="250px" height="250px"></td>-->
>>>>>>> 700b7d4e26d0b1f7c2b88eb2f98da65acd9ffb68
                
            </tr>
            <?php
                }
                    mysqli_free_result($result);
                    musqli_close($con)
            ?>
        </table>
    </body>
</html>
