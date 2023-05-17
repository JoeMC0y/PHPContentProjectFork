<?php
include_once('header.php');

?>

<p class="error">* required field</p>

<form action="signupscript.php" method="post">
    Username: <input type="text" name="name" value="<?php echo $name;?>"/><br />
    <span class="error">*</span>
<br><br>
    Password: <input type="text" name="pass" value="<?php echo $pass;?>"/><br />
    <span class="error">*</span>
<br><br>
<input type="checkbox" name="adm" value="Admin">
  <label for="vehicle1"> I am an admin</label><br>
<br><br>
    <input type="submit" />
</form>

<style><?php include('../default.css') ?></style>
<br />
<?php
include_once('footer.php');
?>