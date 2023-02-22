<?php
$f="FREDINAND";

echo " reverse before: <b>",$f,"</b><br><br>";
echo " reverse after: <b>";
for ($i=strlen($f)-1; $i >=0 ; $i--) { 
    echo $f[$i];
}
echo "</b>";

?>