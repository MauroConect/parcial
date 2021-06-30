<html>
<?php

$numero1 = $_POST ['base'];
$numero2 = $_POST ['altura'];



function rectangulo ($numero1, $numero2){
    $area=0;
    $area = $numero1*$numero2;
     
    echo "<h1>la superficie que indico es: $area</h2>";

   }
  

rectangulo ($numero1,$numero2);

?>

</html>