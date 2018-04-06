#!/usr/bin/php
<?php

$str = trim(preg_replace("/\s+/", " ", $argv[1]));

print ("$str\n");

?>