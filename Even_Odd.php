<?php
function isEven($num)
{
if($num%2==0)
{
    return "$num is even<br>";
}else{
    return "$num is odd";
}
}

echo isEven(10);
echo isEven(5);
?>