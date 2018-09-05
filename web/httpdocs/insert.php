<?php
    require 'index.php';
    $item_name = 'test';
    $query = "INSERT INTO option(option_id,name) VALUES ('','$name')";
        $result = mysqli_query($con, $query);
        if(result)
        {
            echo "Yes";
        }
 else {            echo 'No'. mysqli_error($con);}
