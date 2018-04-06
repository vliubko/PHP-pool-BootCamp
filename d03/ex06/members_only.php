<?php

if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys')
{

    $file_img = file_get_contents("../img/42.png");
    $file_img = base64_encode($file_img);

    header('Content-Type: text/html');
    echo "<html><body>"."\n"."Hello Zaz<br />";
    echo "<img src='data:image/png;base64,";
    echo $file_img;
    echo "'>"."\n";
    echo "</body></html>";

}
else
{
    header("WWW-Authenticate: Basic realm=''Member area''");
    header('HTTP/1.0 401 Unauthorized');
    header('Content-Type: text/html');
    echo "<html><body>That area is accessible for members only</body></html>";
}
?>