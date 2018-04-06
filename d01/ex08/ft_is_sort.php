<?php

function ft_is_sort($array)
{
    $sorted = $array;
    sort($sorted);

    $rev_sorted = $array;
    rsort($rev_sorted);

    if ($array == $sorted)
        return (true);
    if ($array == $rev_sorted)
        return (true);
    return (false);
}

?>
