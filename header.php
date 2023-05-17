<title>
    <?php 
        session_start(); 
        error_reporting(); 
        // $stylesheet = $_SERVER['DOCUMENT_ROOT'] . "\default.css";

    ?>
</title>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="<?php echo $pgDesc?>" />
    <meta name="keywords" content="<?php echo $keyWords?>" />

    <link href="$_COOKIE['style']" rel="stylesheet"/>

</head>

<body>

    <?php
    // make this an if statement when session is implemented - show settings instead of login/signup
            //$menu = array("Home"=>"/home.php", "About"=>"/about.php", "Contact"=>"/contact.php");
    if (!isset($_COOKIE["user"])) {

        $menu = array("About", "Contact", "Account");
        $aboutMenu = array("History" => "/about/history.php", "Mission" => "/about/mission.php");
        $accMenuLoggedOut = array("Login" => "/account/login.php", "Sign Up" => "/account/signup.php");
        $contactMenu = array("Email" => "/contact/email.php", "Location" => "/contact/location.php");
        foreach ($menu as $title) {
            echo ('<div class="dropdown"><button class="dropbtn">' . $title . '</button>');
            switch ($title) {
                case 'About':
                    echo ('<div class="dropdown-content">');
                    foreach ($aboutMenu as $title => $link) {
                        echo ('<a href=' . $link . '>' . $title . '</a>');
                    };
                    echo ('</div>');
                    break;
                case 'Contact':
                    echo ('<div class="dropdown-content">');
                    foreach ($contactMenu as $title => $link) {
                        echo ('<a href=' . $link . '>' . $title . '</a>');
                    };
                    echo ('</div>');
                    break;
                case 'Account':
                    // if not logged in
                    echo ('<div class="dropdown-content">');
                    foreach ($accMenuLoggedOut as $title => $link) {
                        echo ('<a href=' . $link . '>' . $title . '</a>');
                    };
                    echo ('</div>');
                    break;
            };
            echo ('</div>');
        };
    } else {
        
        $menu = array("About", "Contact", $_COOKIE["user"]);


        $aboutMenu = array("History" => "/about/history.php", "Mission" => "/about/mission.php");
        $accMenuLoggedIn = array("Settings" => "/account/settings.php", "Logout" => "/account/logout.php"); // add log out? if admin use add page

        if($_COOKIE["admin"] == 1 || $_COOKIE["admin"] == "1"){
            $accMenuLoggedIn = array("Admin" => "/admin/addpage.php", "Settings" => "/account/settings.php", "Logout" => "/account/logout.php");
        }else{
            $accMenuLoggedIn = array("Settings" => "/account/settings.php", "Logout" => "/account/logout.php");
        }

        $contactMenu = array("Email" => "/contact/email.php", "Location" => "/contact/location.php");

        foreach ($menu as $title) {
            echo ('<div class="dropdown"><button class="dropbtn">' . $title . '</button>');
            switch ($title) {
                case 'About':
                    echo ('<div class="dropdown-content">');
                    foreach ($aboutMenu as $title => $link) {
                        echo ('<a href=' . $link . '>' . $title . '</a>');
                    }
                    ;
                    echo ('</div>');
                    break;
                case 'Contact':
                    echo ('<div class="dropdown-content">');
                    foreach ($contactMenu as $title => $link) {
                        echo ('<a href=' . $link . '>' . $title . '</a>');
                    }
                    ;
                    echo ('</div>');
                    break;
                case $_COOKIE["user"]:
                    // if not logged in
                    echo ('<div class="dropdown-content">');
                    foreach ($accMenuLoggedIn as $title => $link) {
                        echo ('<a href=' . $link . '>' . $title . '</a>');
                    };
                    echo ('</div>');
                    break;
            };
            echo ('</div>');
            
        };
        echo ("Hello " . $_COOKIE["user"]);
    }
    ?>
    </body>
</html>