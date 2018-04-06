#!/usr/bin/php
<?php

if ($argc < 2)
    exit (0);

function RemoveFalseButNotZero($value)
{
    return ($value || is_numeric($value));
}

function ft_pure_argv($argv)
{
    $array = array_splice($argv, 1);
    $str = implode(" ", $array);
    $array = explode(" ", $str);
    $trim_array = array_filter($array, "RemoveFalseButNotZero");
    $trim_array = array_values($trim_array);
    return ($trim_array);
}

function ft_is_alpha($str)
{
    if ((ord($str[0]) >= 65 && ord($str[0]) <= 90) ||
        (ord($str[0]) >= 97 && ord($str[0]) <= 122))
        return (true);
    return (false);
}

function    set_priority($char)
{
    if (ft_is_alpha($char))
        return (3);
    if (is_numeric($char))
        return (2);
    return (1);
}

function    cmp($s1, $s2)
{
    $i = 0;

    $s1 = strtolower($s1);
    $s2 = strtolower($s2);

    while ($s1[$i] == $s2[$i] && $s1[$i] && $s1[$i])
        $i++;
    if ($s1[$i] == $s2[$i])
        return (0);

    $priority = array (set_priority($s1[$i]), set_priority($s2[$i]));

    if ($priority[0] == $priority[1])
        return (strcmp($s1[$i], $s2[$i]));
    if ($priority[0] > $priority[1])
        return (-1);
    else
        return (1);
}

$array = ft_pure_argv($argv);

usort($array, "cmp");

foreach ($array as $eval)
    print("$eval\n");

?>