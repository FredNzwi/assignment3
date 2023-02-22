
<P>a half of rhombus</P>
<?php
    //rhombus

    $fred=10;

    for ($i=1; $i <=$fred ; $i++) { 
        echo "<br>";
        for ($j=1; $j <=$fred ; $j++) { 
            if ($j<=($fred-$i)) {
                echo "&nbsp&nbsp";
            }
            else {
                if ($i==10) {
                    
                        for ($i=1; $i <=$fred ; $i++) { 
                            
                            for ($j=$fred; $j >=1; $j--) { 
                            if ($j<=($fred-$i)) {
                                echo "*";   
                            }
                        else {
                            echo "&nbsp&nbsp";
                        }
                    }
                    echo "<br>";
                }
                
                   break; 
                }
                else{
                    echo "*";
                }
                    

                
                
            }
        }
    }

?>
    