<?php

function auth($login, $passwd)
{
    //    get accounts database from file
    $content = file_get_contents("../private/passwd");
    $accounts = unserialize($content);

    if ($login == "" || $passwd == "")
        return (FALSE);

    foreach ($accounts as $i => $user)
    {
        if ($login === $user['login'])
        {
            $hash_pass = hash('whirlpool', $passwd);
            if ($hash_pass === $user['passwd'])
            {
                echo "OK\n";
                return (TRUE);
            }
            else
            {
                echo "ERROR\n";
                return (FALSE);
            }

        }
    }
    echo "ERROR\n";
    return (FALSE);
}

?>