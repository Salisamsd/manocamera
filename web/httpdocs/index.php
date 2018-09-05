<?php

error_reporting(0);

$con = mysqli_connect('localhost', 'manocame', 'Pern1234') or die('nooo');
mysqli_select_db($con, 'main');

$sql = "select * from items";
$res = mysqli_query($con, $sql);

$data = [];
while($row = mysqli_fetch_assoc($res)){
    array_push($data, $row);
}

print_r($data);