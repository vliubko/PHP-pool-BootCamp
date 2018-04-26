<?php

session_start();

if ($_GET['submit'] == "OK")
{
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html><body>
<form name="index.php" action="index.php" method="get">
    Username: <input name="login" value="<?php echo $_SESSION['login'] ?>" />
    <br />
    Password: <input name="passwd" type="password" value="<?php echo $_SESSION['passwd'] ?>" />
    <input name="submit" type="submit" value="OK" />
</form>
</body></html>
