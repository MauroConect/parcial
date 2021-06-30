<html>
<head>
<link rel="stylesheet" type="text/css" href="css/estilos.css">   
</head>
<body>

<div class="resultado">
<h2>resultado</h2>
</div> 

<?php
$numero1 = $_POST ['Pi'];

function calcular ($numero1){
 $area = (3.1416*($numero1*$numero1))/2; 
 
 echo "<h1>la superficie que indico es $area</h1>";
}

calcular ($numero1);

?>
</body>


</html>



