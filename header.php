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
            $menu = array("Home"=>"/home.php", "About"=>"/about.php", "Contact"=>"/contact.php");
            foreach($menu as $title => $link) {
                echo ('<li><a href=' . $link . '>' . $title . '</a></li>');
            };
            ?>
        </ul>
    </header>

