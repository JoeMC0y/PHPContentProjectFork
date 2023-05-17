<?php
include_once('../header.php');

include_once('settingScript.php');
?>

<link id="style-link" rel="stylesheet" type="text/css" href="../default.css">

<body>
<form action="settingScript.php" method="post">
    <input type="submit" name="dark" value="dark" />
    <input type="submit" name="flashbang" value="flashbang" />
    <input type="submit" name="default" value="default" />
</form>
</body>
<br />
<?php
include_once('footer.php');
?>