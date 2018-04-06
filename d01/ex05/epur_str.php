#!/usr/bin/php
<?php

function RemoveFalseButNotZero($value)
{
    return ($value || is_numeric($value));
}

if ($argc < 2)
    exit (0);

$array = explode(" ", $argv[1]);
$trim_array = array_filter($array, "RemoveFalseButNotZero");
$trim_array = array_values($trim_array);
$ret = implode(" ", $trim_array);

print("$ret\n");

?>