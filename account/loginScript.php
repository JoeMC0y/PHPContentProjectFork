<?php


DEFINE('Username', 'JohnDoe');
DEFINE('Password', 'passwurd');
DEFINE('Name', 'John Doe');


if($_POST["name"] == Username && $_POST["pass"] == Password){
    setcookie("user", Name, time() + (86400 * 30), "/");
    setcookie("password", Password, time() + (86400 * 30), "/");
    setcookie("style", "\default.css", time() + (86400 * 30), "/");
    header("Location: http://localhost:5435/");
    exit();
}else{
    echo "no match";
}




include_once "login.php";

?>