<?php
        $str1=$_POST['str1'];
        $str1=$_POST['str2'];
        $n=$_POST['str3'];
        $ch=$_POST['option'];

        echo"First string=$str1.<br>";
        echo"Second string=$str2.<br>";

            switch($ch)
            {
                case 'o':$pos=strpos($str1,$str2);
                    if($pos!=0)
                    echo "String '$str2' Not present at the start of '$str1'.<br>";
                    
                    else

                    echo "String '$str2' present at the start of '$str1'.<br>";
                    break;

                case 's':
                    $pos=strpos($str1,$str2);
                    if($pos>0)
                    {
                        echo "<br>String '$str2' Present in '$str1' at $pos position.<br>";
                        $cnt=substr_count($str1,$str2);
                        echo "There are $cnt '$str2' Present in '$str1' string.<br>";
                    }
                    else
                    echo "There are 0 '$str2' Present in '$str1' string.<br>";
                    break;

                case 'c':
                    if(strcmp($str1,$str2)>0)
                    {
                        echo "String2 sorts before String1";
                    }
                    elseif(strcmp($str1,$str2)==0)
                    {
                        echo "both are equal";
                    }
                    elseif(strcmp($str1,$str2)<0)
                    {
                        echo "\n String1 sort before String2";
                    }
                    echo "\nCompare both the string for first $n characters";

                    if(strcmp($str1,$str2,$n)==0)

                    echo "\n Both strings are equal";

                    elseif(strcmp($str1,$str2,$n)<0)

                    echo "\n string is less than string2";

                    else
                    echo "\n string1 is greater than string2";
                    break;

            }
?>
