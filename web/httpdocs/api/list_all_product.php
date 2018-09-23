<?php

require '../index.php';
$q = 'select * from items LEFT JOIN option ON items.option_id=option.option_id LEFT JOIN brands ON items.brand_id=brands.brand_id LEFT JOIN types ON items.type_id=types.type_id LEFT JOIN Status ON items.status_id=Status.status_id WHERE brands.brand_name = "GoPro"';
$result = mysqli_query($con,$q);
mysqli_set_charset($con, "utf8");

$items = [];
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $items[] = [
        'item_id' => intval($row['item_id']),
        'option_id' => intval($row['option_id']),
    ]/* + $row*/;
}

$data = [
    'products' => $items,
    'total' => count($items)
];

header('Access-Control-Allow-Origin: *');  
header('Content-Type: application/json');

echo json_encode($data);