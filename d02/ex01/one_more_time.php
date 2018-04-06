#!/usr/bin/php
<?php

function ft_exit()
{
    print("Wrong Format\n");
    exit (0);
}

date_default_timezone_set('Europe/Kiev');

function get_month($string)
{
    $string = strtolower($string);
    $month = array(
        1 => "janvier",
        2 => "février",
        3 => "mars",
        4 => "avril",
        5 => "mai",
        6 => "juin",
        7 => "juillet",
        8 => "août",
        9 => "septembre",
        10 => "octobre",
        11 => "novembre",
        12 => "décembre");
    foreach ($month as $key => $value)
    {
        if ($string == $value)
            return ($key);
    }
}

if ($argc < 2)
    exit();

if (!preg_match("/(^[L|l]undi|^[M|m]ardi|^[M|m]ercredi|^[S|s]eudi|^[V|v]endredi|^[S|s]amedi|^[D|d]imanche) ([0-9]{2}) ([J|j]anvier|[F|f]evrier|[M|m]ars|[A|a]vril|[M|m]ai|[J|j]uin|[J|j]uillet|[A|a]out|[S|s]eptembre|[O|o]ctobre|[N|n]ovembre|[D|d]ecembre) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/", $argv[1], $array))
    ft_exit();

$hour = $array[5];
$minute = $array[6];
$second = $array[7];

$month = get_month($array[3]);
$day = $array[2];
$year = $array[4];

$ret = mktime($hour, $minute, $second, $month, $day, $year);

print ("$ret\n");

?>