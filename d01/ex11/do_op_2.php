#!/usr/bin/php
<?php

function ft_exit($i)
{
    if ($i == 1)
        print("Incorrect parameters\n");
    if ($i == 2)
        print("Syntax Error\n");
    exit (0);
}

function    do_op($sign, $first, $second)
{
    if ($sign == "+")
        return ($first + $second);
    if ($sign == "-")
        return ($first - $second);
    if ($sign == "*")
        return ($first * $second);
    if ($sign == "/")
    {
        if ($second == "0")
        {
            print("Ne nado tak. No division by zero\n");
            exit (0);
        }
        else
            return ($first / $second);
    }
    if ($sign == "%")
    {
        if ($second == "0")
        {
            print("Ne nado tak. No division by zero\n");
            exit (0);
        }
        else
            return ($first % $second);
    }
    else
        ft_exit(2);
}

if ($argc != 2)
    ft_exit(1);

$array = sscanf($argv[1], "%d %c %d %s");

if (!is_numeric($array[0]) ||  !is_numeric($array[2]) || $array[3])
    ft_exit(2);

$result = do_op($array[1], $array[0], $array[2]);
print ("$result\n");

?>