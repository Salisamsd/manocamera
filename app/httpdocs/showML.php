<?php
  require 'index.php';//ตัวเชื่อมหน้า index
  $sml = ' select * from mirrorless ';
  $ressml = mysqli_query($con,$sml);//แสดงผลจากหน้าหลักและqa
  mysqli_set_charset($con, "utf8");//setภาษาthai
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ShowML</title>
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
                
                 <!--thคือคอลัมน์-->
                <th style="width: 150px">ml_model</th>
                <th style="width: 200px">ml_name</th>
                <th style="width: 200px">ml_description</th>
                <th style="width: 150px">option_id</th>  
                <th style="width: 150px">ml_price</th>
                <th style="width: 150px">ml_priceperday</th>
                <th style="width: 150px">deposit_1</th>
                <th style="width: 150px">deposit_2</th>
                <th style="width: 150px">type_id</th>
                <th style="width: 150px">brand_id</th>
                <th style="width: 150px">status_id</th>
                <th style="width: 90px">แก้ไข</th>
            </tr>
            <?php //ประกาศให้rowเอาค่าของdatabaseดึงออกมา
                while ($row = mysqli_fetch_array($ressml,MYSQLI_ASSOC)){
                    ?>
            <tr>
                <td><?php echo ($row['ml_madel']);?></td>
                <td><?php echo ($row['ml_name']);?></td>
                <td><?php echo ($row['ml_description']);?></td>
                <td><?php echo ($row['option_id']);?></td>
                <td><?php echo ($row['ml_price']);?></td>
                <td><?php echo ($row['ml_priceperday']);?></td>
                <td><?php echo ($row['deposit_1']);?></td>
                <td><?php echo ($row['deposite_2']);?></td>
                <td><?php echo ($row['type_id']);?></td>
                <td><?php echo ($row['brand_id']);?></td>
                <td><?php echo ($row['status_id']);?></td>
                <td><a href="upML.php?ml_id="<?php echo ($row['ml_id']);?>>แก้ไข</td>
            </tr>
            <?php
                }
                    mysqli_free_result($ressml);
                    musqli_close($con)
            ?>
        </table>
    </body>
</html>
