<?php
include('fun1.php');
$str = $_POST['str'];
    $ch = $_POST['option'];

    if ($ch == 'len')
    {
        length($str);
    }
    elseif ($ch == 'vowel')
    {
        $result = vowel($str);
        echo "Number of vowels = $result";
    }
    elseif ($ch == 'lower')
    {
        lower($str);
    }
    elseif ($ch == 'padding')
    {
        padding($str);
    }
    elseif ($ch == 'reverse')
    {
        reverse($str);
    }
    else
    {
        echo "Option not found";
    }
?>