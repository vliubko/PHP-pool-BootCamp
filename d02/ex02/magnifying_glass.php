#!/usr/bin/php
<?php

function ft_exit()
{
    print("Wrong Format\n");
    exit (0);
}

function replace_first($find, $replace, $subject)
{
    // stolen from the comments at PHP.net/str_replace
    // Splits $subject into an array of 2 items by $find,
    // and then joins the array with $replace
    return implode($replace, explode($find, $subject, 2));
}

function title_replace($line)
{
    $special = trim(" \" ");
    $start = strpos($line, "title=");
    if ($start)
    {
        $start = $start + 7;
        $finish = strpos($line, $special, $start);
        if ($finish)
        {
            $replace_str = substr($line, $start, $finish - $start);
            $new_str = strtoupper($replace_str);
            $line = replace_first($replace_str, $new_str, $line);
        }
    }
    return($line);
}

function a_href_replace($line)
{
    $special = trim(" \" ");
    $start = strpos($line, "<a") + 1;
    $finish = strpos($line, ">", $start);

    if ($start && $finish)
    {
        $start = $finish;
        if ($start)
            $finish = strpos($line, "<", $start);
        if ($start && $finish)
        {
            $replace_str = substr($line, $start, $finish-$start);
            $new_str = strtoupper($replace_str);
            $line = replace_first($replace_str, $new_str, $line);
        }

    }
    return($line);
}


$fd = fopen($argv[1], "r");
if ($fd)
{
    while (($line = fgets($fd)) !== false)
    {
        $line = title_replace($line);
        $line = a_href_replace($line);
        print($line);
    }
    fclose($fd);
}
else
    ft_exit();

?>