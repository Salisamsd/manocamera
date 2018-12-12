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
    $username = $request->username;
    $item_name = $request->item_name;
    $sdate = $request->sdate;
    $edate = $request->edate;
    $total = $request->total;
    $personID = $request->personID;
    $number = mt_rand(0, 1000000);
    $number1 = mt_rand(0, 10000000);
    $date = date('m-d-Y_H:i:s');
    $text = "TH" . $str;
    $rentID = date('Y') . $number . $number1 . $text;
    $optionRent = $request->optionRent;
	
}

//$username = stripslashes($username);
//$password = stripslashes($password);



$sql = "INSERT INTO rentlist ( rentID,item_name,total,username, sdate,edate,rentFormat,status_r)
VALUES ('$rentID','$item_name','$total','$username', '$sdate','$edate','$optionRent','$optionRent')";


if ($con->query($sql) === TRUE) {
    $response = "คิวว่าง";
} else {
    $response = "Error: " . $sql . "<br>" . $db->error;
}


echo json_encode($response);
?>
