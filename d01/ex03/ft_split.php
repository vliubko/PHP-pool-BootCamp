<?php

function RemoveFalseButNotZero($value)
{
    return ($value || is_numeric($value));
}

function ft_split($str)
{
    $array = explode(" ", $str);
    $return = array_filter($array, "RemoveFalseButNotZero");
    $return = array_values($return);
    return($return);
}

?>
