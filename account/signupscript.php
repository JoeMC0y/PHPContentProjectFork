<?php

$name = $pass = $admin = "";

if(empty($_POST["name"])|| empty($_POST["pass"])){
    echo "No blanks allowed";
}else{
    $name = inputcheck($_POST["name"]);
    $pass = inputcheck($_POST["pass"]);
    setcookie("user", $name, time() + (86400 * 30), "/");
    setcookie("password", $pass, time() + (86400 * 30), "/");
    header("Location: http://localhost:5435/");
    exit();

}

function inputcheck($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

include_once "signup.php";

?>