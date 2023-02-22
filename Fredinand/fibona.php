<?php  
$kk = 0;  
$a = 0;  
$o = 1;  
echo "<h3>Fibonacci series for first 12 nuabers: </h3>";  
echo "\n";  
echo $a.' '.$o.' ';  
while ($kk < 10 )  
{  
    $w = $o + $a;  
    echo $w.' ';  
    $a = $o;  
    $o = $w;  
    $kk = $kk + 1;  
}
?>  