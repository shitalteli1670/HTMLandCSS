<?php
// Functions for string manipulations
function length($str)
{
    $i = 0;
    while (isset($str[$i]) && $str[$i] != '')
    {
        $i++;
    }
    echo "Result is " . $i;
}

function vowel($str)
{
    $n = strlen($str);
    $count = 0;
    for ($i = 0; $i < $n; $i++)
    {
        $e = $str[$i];
        if ($e == 'a' || $e == 'e' || $e == 'i' || $e == 'o' || $e == 'u' ||
            $e == 'A' || $e == 'E' || $e == 'I' || $e == 'O' || $e == 'U')
        {
            echo "\$str[$i] = $str[$i]<br>";
            $count++;
        }
    }
    return $count;
}

function lower($str)
{
    $s = strtolower($str);
    echo "String in lowercase: " . $s . "<br>";
    $s1 = ucwords($s);
    echo "String in Titlecase: " . $s1 . "<br>";
}

function padding($str)
{
    echo str_pad($str, 20, "*", STR_PAD_BOTH);
}

function white($str)
{
    echo trim($str);
}

function reverse($str)
{
    echo strrev($str);
}
?>