<?php

// Validate passwords (old && new) and set new password for user
function ft_check_password($old_pwd)
{
    $old_hash = hash('whirlpool', $_POST['oldpw']);
    $new_hash = hash('whirlpool', $_POST['newpw']);
    if ($old_hash !== $old_pwd){
        return (NULL);
    }
    if ($new_hash === $old_hash){
        return (NULL);
    }
    return ($new_hash);
}
?>

<?php

if ($_POST['login'] === "" || $_POST['newpw'] === "" || $_POST['oldpw'] === "" || $_POST['submit'] !== "OK") {
echo "ERROR\n";
return ;
}

//    get accounts database from file
$content = file_get_contents("../private/passwd");
$accounts = unserialize($content);

//  Check if old password is correct. If user doesn't exists, error.
foreach ($accounts as $i => $user)
{
    if ($user['login'] === $_POST['login']) {
        $new_hash = ft_check_password($user['passwd']);
        if ($new_hash === NULL)
        {
            echo "ERROR\n";
            return ;
        }
        $accounts[$i]['passwd'] = $new_hash;
        file_put_contents("../private/passwd", serialize($accounts));
        echo "OK\n";
        return;
    }
}
echo "ERROR\n";
?>
