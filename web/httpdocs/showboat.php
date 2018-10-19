<?php
require 'index.php';
$q = 'select * from TBboat';
$result = mysqli_query($con,$q);
mysqli_set_charset($con, "utf8");

$items = [];
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $items[] = [
        'id_boat' => intval($row['id_boat']),
        'boat_name' => intval($row['boat_name']),
    ]/* + $row*/;
}

$data = [
    'Boat' => $items,
    'total' => count($items)
];

header('Access-Control-Allow-Origin: *');  
header('Content-Type: application/json');

echo json_encode($data);