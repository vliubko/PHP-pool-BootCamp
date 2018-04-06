#!/usr/bin/php
<?php

function remove_argv($argv)
{
    $array = array_splice($argv, 1);
    $array = array_splice($array, 1);
    $new_array = array_values($array);
    return ($new_array);
}

    if ($argc < 3)
        exit();

    $search = $argv[1];
    $array = remove_argv($argv);
    $array = array_reverse($array);

    foreach ($array as $value)
    {
        $tmp = explode(":", $value);
        if ($search === $tmp[0])
        {
            print("$tmp[1]\n");
            exit();
        }
    }
?>