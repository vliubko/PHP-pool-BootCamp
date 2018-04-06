#!/usr/bin/php
<?php

if ($argc < 2)
    exit (0);

function RemoveFalseButNotZero($value)
{
    return ($value || is_numeric($value));
}

function ft_split($str)
{
    $array = explode(" ", $str);
    $trim_array = array_filter($array, "RemoveFalseButNotZero");
    $trim_array = array_values($trim_array);
    return ($trim_array);
}

$array = ft_split($argv[1]);

array_push($array, $array[0]);
$array = array_splice($array, 1);

$ret = implode(" ", $array);

print("$ret\n");

?>