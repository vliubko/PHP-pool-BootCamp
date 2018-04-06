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

$array = array_splice($argv, 1);

$ret = implode(" ", $array);
$array = ft_split($ret);
sort($array);

foreach ($array as $eval)
    print("$eval\n");

?>