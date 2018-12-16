<?php  
		require("conn.php");
	$lat1 = array();
	$sql = "select id_location,lat,lon,time from location1"; 
 
	if($res = $conn->query($sql)){
		while($row=$res->fetch_assoc()){  
			$id_location = $row['id_location'];
				$lat = $row['lat'];  
					$lon = $row['lon'];
						$time = $row['time'];
							$data=array("id_location"=>$id_location,"lat"=>$lat,"lon"=>$lon,"time"=>$time);                
		$lat1[] = $data; 
		$result = array("result"=>$lat1);  
	}       
	echo json_encode($result); 
} 
	
?>
