<?php 
    require 'index.php';
    $q = 'select * from calcu';
    $result = mysqli_query($con,$q);
    mysqli_set_charset($con, "utf8");
    
    ?>
<table border="1" class="table table-striped table-bordered table-hover" >
            <tr>
                
                <th>num1</th>
                <th>num1</th>
                <th>total</th>
                
            </tr>
            <?php 
                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
                
            <tr>
                
                <td><?php echo ($row['num1']) ;?></td>
                <td ><?php echo $row['num2'] ;?></td>
                <td name='total'> <?php echo $row['num1'] + $row['num2'] ?> </td>
            </tr>
            <?php
                }
                    mysqli_free_result($result);
                    musqli_close($con)
            ?>
        </table>
<?php
                    $sql = "UPDATE calcu SET  img2='$image_name1'"; 
                    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    ?>