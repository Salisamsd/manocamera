<!DOCTYPE html>
<?php 
    require 'index.php';
    $q = 'select * from items LEFT JOIN option ON items.option_id=option.option_id LEFT JOIN brands ON items.brand_id=brands.brand_id LEFT JOIN types ON items.type_id=types.type_id LEFT JOIN Status ON items.status_id=Status.status_id';
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
                <th style="width: 90px">แก้ไข</th>  
            </tr>
            <?php 
                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
                
            <tr>
                
                <td><?php echo ($row['item_model']) ;?></td>
                <td><?php echo $row['item_name'] ;?></td>
                <td style="width: 300px"> <?php echo nl2br($row['item_description']) ;?></td>
                <td><?php echo $row['name'] ;?></td>
                <td><?php echo number_format($row['price']) ;?></td>
                <td><?php echo number_format($row['priceperday']) ;?></td>
                <td><?php echo number_format($row['deposit_1']) ;?></td>
                <td><?php echo number_format($row['deposit_2']) ;?></td>
                <td><?php echo $row['type_name'] ;?></td>
                <td><?php echo $row['brand_name'] ;?></td>
                <td><?php echo $row['status_name'] ;?></td>
                <td><a href="update.php?pro_id=<?php echo ($row['item_model']) ;?>">แก้ไข</td>
            </tr>
            <?php
                }
                    mysqli_free_result($result);
                    musqli_close($con)
            ?>
        </table>
    </body>
</html>
