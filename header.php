<title>
    <?php session_start(); echo $page_title; ?>
</title>

<!DOCTYPE html>
<html lang="en">
<meta name="description" content="<?php echo $pgDesc?>" />
<meta name="keywords" content="<?php echo $keyWords?>" />
<link href="styles.css" rel="stylesheet" />

<body>
    <header>
        <ul>
            <?php
            // make this an if statement when session is implemented - show settings instead of login/signup
            $menu = array("Home"=>"/home.php", "About"=>"/about.php", "Contact"=>"/contact.php", "Login"=>"/account/login.php", "Sign Up"=>"/account/signup.php");
            foreach($menu as $title => $link) {
                echo ('<li><a href=' . $link . '>' . $title . '</a></li>');
            };
            ?>
        </ul>
    </header>

