<?php

$input;
$A = 0;
$B = 0;

foreach ($input as $value) {
    if($value[0] > $value[1])
        {
            $A++ ;
        }
        else if($value[0] < $value[1])
        {
            $B++ ;
        }
    }
echo ($A);
echo ($B);

if($A > $B)
{
    $winner = 'A';
}
else
{
    $winner = 'B';
}

/* 
foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

foreach($v1 as $v2)
    {
        if($v1 > $v2)
        {
            ++brotherA;
        }
        else if($v2 > $v1)
        {
            ++brotherB;
        }


*/