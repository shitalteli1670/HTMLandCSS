<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   
    $str1 = $_POST['str1'];
    $str2 = $_POST['str2'];
    $str3 = $_POST['str3'];

  
    $result = str_replace($str2, $str3, $str1);

  
    echo "<h3>Original String:</h3><p>$str1</p>";
    echo "<h3>Modified String:</h3><p>$result</p>";
}
?>
