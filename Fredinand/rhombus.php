
   <h1><P>Rhombus</P></h1> 
<?php
    
    $fred=10;

    for ($i=1; $i <=$fred ; $i++) { 
        echo "<br>";
        for ($j=1; $j <=$fred ; $j++) { 
            if ($j<=($fred-$i)) {
                echo "&nbsp";
            }
            else {
                if ($i==10) {
                    
                        for ($i=1; $i <=$fred ; $i++) { 
                            
                            for ($j=$fred; $j >=1; $j--) { 
                            if ($j<=($fred-$i)) {
                                echo "*";   
                            }
                        else {
                            echo "&nbsp";
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
    