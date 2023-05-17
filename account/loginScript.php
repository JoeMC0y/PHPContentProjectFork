<?php


DEFINE('Username', 'JohnDoe');
DEFINE('Password', 'passwurd');


if($_POST["name"] == Username && $_POST["pass"] == Password){
    setcookie("user", Username, time() + (86400 * 30), "/");
    setcookie("password", Password, time() + (86400 * 30), "/");
    setcookie("style", "\default.css", time() + (86400 * 30), "/");
    header("Location: http://localhost:5435/");
    exit();
}else{
    echo "no match";
}




include_once "login.php";

?>