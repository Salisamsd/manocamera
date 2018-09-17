<?php 
    require 'index.php';

	$q = "select * from TBport";
	$result = mysqli_query($con,$q); 
if($result){
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		echo "stop_id".$row['stop_id']."<br>";
		echo "stopname_th".$row['stopname_th']."<br>";
		echo "stopname_eng".$row['stopname_eng']."<br>";
		echo "stop_lat".$row['stop_lat']."<br>";
		echo "stop_long".$row['stop_long']."<br>";
		echo "id_line".$row['id_line']."<br>";
	}
	mysqil_free_result($result){
	else{
		echo "Fail"
	}
?>