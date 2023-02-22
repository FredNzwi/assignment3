
<h1><P>equilateral triangle</P></h1>
<?php
  

    $fred=10;

    for ($i=1; $i <=$fred ; $i++) { 

        ?>
        <div style="margin-top:-10px">
        <?php

        for ($j=1; $j <=$fred ; $j++) { 
            if ($j<=($fred-$i)) {
                echo "&nbsp";
            }
            else {
            
                    echo "*";
                
            }
        }
        ?>
        </div>
        <?php
    }

?>
    