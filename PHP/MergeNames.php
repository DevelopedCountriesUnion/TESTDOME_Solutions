--- PHP ---
<?php

function unique_names(array $array1, array $array2) : array
{
    $array3 = array_intersect($array1, $array2);   //The array_intersect() function compares the values of two (or more) arrays, and returns the matches.
    return array_unique(array_merge($array3,$array1, $array2));    //The array_merge() function merges one or more arrays into one array.
       //The array_unique() function removes duplicate values from an array. If two or more array values are the same, the first appearance will be kept and the other will be removed.
}

$names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia
