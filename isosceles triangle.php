<?php
for($i=7; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo "*";
        if($j < $i)
        {
            echo " ";
        }
    }
    echo "<br>";
}


?>
