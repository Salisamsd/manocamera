<?php

if (isset($_SERVER['HTTP_ORIGIN'])) {

        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

        header('Access-Control-Allow-Credentials: true');

        header('Access-Control-Max-Age: 86400');    // cache for 1 day

    }

 

    // Access-Control headers are received during OPTIONS requests

    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

 

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))

            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");        

 

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))

            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

 

        exit(0);

    }

               

require "../index.php";

  $data = file_get_contents("php://input");

    if (isset($data)) {

        $request = json_decode($data);

        $nationID = $request->nationID;

               }

 
 $sql ="SELECT * FROM rentlist WHERE nationID='$nationID'  ;";

 $result = mysqli_query($con, $sql);

$items = [];
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $items[] = [
        'rentID' => ($row['rentID']),
        'edate' => ($row['edate']),
		 'item_name' => ($row['item_name']),
		
    ]/* + $row*/;
}

$data = [ 'data' =>$items
    //'total' => count($items)'
];

header('Access-Control-Allow-Origin: *');  
header('Content-Type: application/json');

echo json_encode($data);
 ?>