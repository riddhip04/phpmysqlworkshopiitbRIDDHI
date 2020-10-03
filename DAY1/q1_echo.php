<?php

$number= array(11,23,72,44);

for ($x=0; $x <4 ; $x++)
{
if(($number[$x]%2) == 0)
{
echo "no. $number[$x] is even </br>";
}
else
{
echo "no. $number[$x] is odd </br>";
}
}
?>