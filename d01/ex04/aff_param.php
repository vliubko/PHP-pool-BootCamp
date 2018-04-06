#!/usr/bin/php
<?php

if ($argc == 1)
    exit (0);

$j = 1;

while ($j < $argc)
{
    print($argv[$j]);
    print("\n");
    $j++;
}

?>