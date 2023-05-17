<?php
    $style = $_POST["stly"];


    switch($style){
        case("default"):

            setcookie("style", "../default.css", time() + (86400 * 30), "/");
            header("Location: http://localhost:5435/");
            break;
        case("dark"):

            setcookie("style", "../darkmode.css", time() + (86400 * 30), "/");
            header("Location: http://localhost:5435/");
            break;
        case("flashbang"):

            setcookie("style", "../flashbang.css", time() + (86400 * 30), "/");
            header("Location: http://localhost:5435/");
            break;
    };

?>