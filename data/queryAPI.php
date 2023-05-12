<?php
include_once "dbConnect.php";
header('Content-Type: application/json');

$myJson = "";
$row = null;
$myGet;

if(array_key_exists("userId",$_Get)==true){
    $myDbConn = ConnGet();
    $myGet = $_GET["userId"];

    if($myGet){
        $row = mysqli_fetch_array($dataSet);
        $myJson = '[{"username":"'.$row['username'].'","password":"'.$row['password'].'"}]';
    }
    mysqli_close($myDbConn);
}
//I want to build this one for admin but the isAdmin case is wonky
if(array_key_exists("userId",$_Get)==true){
    $myDbConn = ConnGet();
    $myGet = $_GET["userId"];

    if($myGet){
        $row = mysqli_fetch_array($dataSet);
        $myJson = '[{"username":"'.$row['username'].'","password":"'.$row['password'].'"}]';
    }
    mysqli_close($myDbConn);
}


?>