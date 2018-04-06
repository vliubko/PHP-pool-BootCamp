#!/usr/bin/php
<?php

function ft_exit()
{
    print("Incorrect parameters\n");
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
		exit (0);

}

if ($argc != 4)
    ft_exit();

$first = trim($argv[1]);
$sign = trim($argv[2]);
$second = trim($argv[3]);

$result = do_op($sign, $first, $second);
print ("$result\n");

?>
