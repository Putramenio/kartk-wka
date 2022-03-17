/zadanie 2/
<form action="" method="get">
    Silnia:<input type="text" name="silnia">
    Fibonaci:<input type="text" name="fibonacci">
    <input name="sub" type="submit" value="oblicz">

<?php
$silnia=$_GET['silnia'];
$fib=$_GET['dibonacci'];
$s=1;
$f;

for($i=1;$i<=$silnia;$i++){
    $s=$s*$i;
}
echo $s;

function fib($fib,$f)
{
    if($fib == 0) return 0;
    else if ($fib ==1) return 1;
    else
    {
        $f=($fib-1) + fib($fib-2);
        echo $f
    } 
}

?>