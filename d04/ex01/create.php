<?php

if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "OK")
{
//    check dir and file
    if (file_exists("../private") === FALSE) {
        mkdir("../private");
    }

    if (file_exists("../private/passwd") === FALSE) {
        file_put_contents("../private/passwd", null);
    }


//    get accounts database from file
    $content = file_get_contents("../private/passwd");
    $accounts = unserialize($content);

//    if user already exists, error
    foreach ($accounts as $user)
    {
        if ($user['login'] === $_POST['login'])
        {
            echo "ERROR\n";
            return ;
        }
    }

//    create new user login & pass
    $hash_pass = hash('whirlpool', $_POST['passwd']);
    $new_user['login'] = $_POST["login"];
    $new_user['passwd'] = $hash_pass;
    $accounts[] = $new_user;

//  write in file
    file_put_contents("../private/passwd", serialize($accounts));
    echo "OK\n";
}
else
{
    echo "ERROR\n";
}
?>

