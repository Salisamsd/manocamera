<?php    
require("index.php");       
$lat = $_POST["lat"];     
$lon = $_POST["lon"];  
$boat = $_POST["boat"];  
$type = $_POST["type"];  
$lineboat = $_POST["lineboat"]; 
 $statement = mysqli_prepare($con, "INSERT INTO TB ( lat,lon,id_boat,id_type,id_line) VALUES ($lat,$lon,$boat,$type,$lineboat)"); 
 mysqli_stmt_execute($statement);         
$response = array();     
$response["online"] = true;            
echo json_encode($response); 
?> 
 
 