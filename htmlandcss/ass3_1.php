<?php
$a = $_GET['t1'];
$b = $_GET['t2'];
$ch = $_GET['ch']; // Assuming `ch` is passed as a parameter in the URL

if ($ch == "m") 
{
    mod($a, $b);
} 
else if ($ch == "r") 
{
    power($a, $b);
} 
else if ($ch == "f") 
{
    fact($b);
} 
else if ($ch == "s") 
{
    sum($a);
} 
else 
{
    sum($a);
}

function mod($a, $b) 
{
    $c = $a % $b;
    echo "Mod of $a and $b is $c";
}

function power($a, $b) 
{
    $d = pow($a, $b);
    echo "Power of $a to the power of $b is $d";
}

function fact($b)
 {
    $fact = 1;
    for ($i = $b; $i > 1; $i--) 
    {
        $fact *= $i;
    }
    echo "Factorial of $b is $fact";
}

function sum($a)
 {
    $s = 0;
    for ($i = 1; $i <= $a; $i++) 
    {
        $s += $i;
    }
    echo "Sum of first $a numbers is $s";
}
?>
