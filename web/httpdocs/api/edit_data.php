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
    $newtelephone = $request->newtelephone;
    $newemail = $request->newemail;
    $newname = $request->newname;
    $newlastname = $request->newlastname;
    $newbdate = $request->newbdate;
    $newnationID = $request->newnationID;
    $newaddress = $request->newaddress;
}

$sql = "UPDATE users SET name='$newname', lastname='$newlastname',bdate='$newbdate',nationID='$newnationID',address='$newaddress', telephone = '$newtelephone', email ='$newemail'  WHERE username = '$username' ";


if ($con->query($sql) == TRUE) {
    $response = "data update successfull";
} else {
    $response = "Error:" . $sql . "<br>" . $con->error;
}

echo json_encode([$response]);

$con->close();
?>