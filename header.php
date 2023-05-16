<title>
    <?php session_start(); error_reporting(); echo $page_title; ?>
</title>

<!DOCTYPE html>
<meta name="description" content="<?php echo $pgDesc?>" />
<meta name="keywords" content="<?php echo $keyWords?>" />
<link href="default.css" rel="stylesheet" />
<html lang="en">
<body>
    <header>
            <?php
            // make this an if statement when session is implemented - show settings instead of login/signup
            //$menu = array("Home"=>"/home.php", "About"=>"/about.php", "Contact"=>"/contact.php");
            $menu = array("About", "Contact", "Account");
            $aboutMenu = array("History"=>"/about/history.php", "Mission"=>"/about/mission.php");
            $accMenuLoggedOut = array("Login"=>"/account/login.php", "Sign Up"=>"/account/signup.php");
            $accMenuLoggedIn = array("Settings"=>"/account/settings.php"); // add log out? if admin use add page
            $contactMenu = array("Email"=>"/about/email.php", "Location"=>"/about/location.php");
            foreach($menu as $title) {
                echo ('<div class="dropdown"><button class="dropbtn">' . $title . '</button>');
                switch($title) {
                    case 'About':
                        echo ('<div class="dropdown-content">');
                        foreach($aboutMenu as $title => $link) {
                            echo ('<a href=' . $link . '>' . $title . '</a>');
                        };
                        echo ('</div>');
                        break;
                    case 'Contact':
                        echo ('<div class="dropdown-content">');
                        foreach($contactMenu as $title => $link) {
                            echo ('<a href=' . $link . '>' . $title . '</a>');
                        };
                        echo ('</div>');
                        break;
                    case 'Account':
                        // if not logged in
                        echo ('<div class="dropdown-content">');
                        foreach($accMenuLoggedOut as $title => $link) {
                            echo ('<a href=' . $link . '>' . $title . '</a>');
                        };
                        echo ('</div>');
                        break;
                };
                echo ('</div>');
            };
            ?>
    </header>
</body>
</html>