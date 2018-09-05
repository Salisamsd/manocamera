<?php
    require 'index.php';
    $q = 'SELECT * FROM items';
    $result = mysqli_query($con,$q);
    
    if ($result){
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            echo 'รหัส'.$row['item_id']."<br>";
            echo 'รุ่น'.$row['item_name']."<br>";
            echo '<hr>';
    }}
        else{
                echo 'Fail';
          
        }
    
