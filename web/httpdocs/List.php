<!DOCTYPE html>
<?php 
    require 'index.php';
    $q = 'select * from items order by option_id asc';
    $result = mysqli_query($con,$q);
    mysqli_set_charset($con, "utf8");
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>แสดงข้อมูลสินค้า</title>
        <style>
            table,th,td{
                border: 1px solid black;
                border-collapse: collapse;
                
            }
        </style>
    </head>
    <body>
        <table border="1" >
            <tr>
                
                <th>Model</th>
                <th>รุ่น</th>
                <th style="width: 300px">รายละเอียด</th>
                <th style="width: 90px">แบบ</th>
                <th style="width: 90px">ราคาเครื่อง</th>
                <th style="width: 90px">ราคาเช่าต่อวัน</th>
                <th style="width: 90px">วางมัดจำแบบที่1</th>
                <th style="width: 90px">วางมัดจำแบบที่2</th>
                <th style="width: 90px" >ประเภท</th>
                <th style="width: 90px">ยี่ห้อ</th>
                <th style="width: 90px">สถานะ</th>        
            </tr>
            <?php 
                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
                
            <tr>
                
                <td><?php echo ($row['model']) ;?></td>
                <td><?php echo $row['item_name'] ;?></td>
                <td style="width: 300px"> <?php echo nl2br($row['description']) ;?></td>
                <td><?php echo $row['option_id'] ;?></td>
                <td><?php echo $row['price'] ;?></td>
                <td><?php echo $row['priceperday'] ;?></td>
                <td><?php echo $row['deposit_1'] ;?></td>
                <td><?php echo $row['deposit_2'] ;?></td>
                <td><?php echo $row['type_id'] ;?></td>
                <td><?php echo $row['brand_id'] ;?></td>
                <td><?php echo $row['status_id'] ;?></td>
            </tr>
            <?php
                }
                    mysqli_free_result($result);
                    musqli_close($con)
            ?>
        </table>
    </body>
</html>
