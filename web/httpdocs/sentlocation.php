<?php    
	require("conn.php");       
		$lat = $_POST["lat"];     
		$lon = $_POST["lon"];  
		 
 	 		$statement = mysqli_prepare($conn, "INSERT INTO location1 ( lat,lon) VALUES ($lat,$lon)"); 
 
    mysqli_stmt_execute($statement);          
				$response = array();     
				$response["online"] = true;           
			echo json_encode($response); 
?> 
	