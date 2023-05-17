<?php

include 'dbConnect.php';


$connec = ConnGet();
$users = getUser($connec, $_POST["name"], $_POST["pass"]);


    if ($users->num_rows > 0) {
        // output data of each row
        while($row = $users->fetch_assoc()) {

            $user = $row["username"];
            $pas = $row["password"];
            setcookie("user", $user, time() + (86400 * 30), "/");
            setcookie("password", $pas, time() + (86400 * 30), "/");
            setcookie("style", "\default.css", time() + (86400 * 30), "/");
            header("Location: http://localhost:5435/");
            exit();

        }
    } else {
        echo "No Matches";
    }
    





include_once "login.php";

?>