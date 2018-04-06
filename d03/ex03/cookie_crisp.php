<?php

if ($_GET['action'] == "set") {
    setcookie($_GET['name'], $_GET['value'], time() + (3600 * 24 * 30), '/');
}
if ($_GET['action'] == "get" && $_COOKIE) {
    echo ($_COOKIE[$_GET['name']]);
    if ($_COOKIE[$_GET['name']]) {
        echo "\n";
    }
}
if ($_GET['action'] == "del") {
    setcookie($_GET['name'], "", time()-1, "/");
}

?>