<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
<link href="estilos.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   

<title>
Área del circulo</title>
</head>
<body>
<?php
include('includes/nav.php');
?>

	<h3 class ="titulo">Calcular el área del circulo con PHP</h3>
	El área de un circulo se calcula multiplicando Pi por radio al cuadrado
	<br>
	<h5>Formula: 3.1416 * (Radio²)</h5>
	<br>
<br>	<img src="img/circulo.png" width="200" height="150">

	<br>
<br>
<form method="POST" action="funciones/circulo.php">
   <table>
      <tr>
	  <td>
	     <label>PI</label>
	  </td>
          <td>
	   <input type="Number" name="radio" value="3.1416" disabled>
	  </td>
     </tr>
      <tr>
	  <td>
	    <label>Valor del Radio</label>
          </td>
	  <td>
	    <input type="Number" name ="Pi" required>
	  </td>
	  <td>
	    <label>Cm²</label>
          </td>
      </tr>
</table>

<input type="submit" name="submit" value="Calcular Área">
		
</form>
<br>
<br>
</body>
</html>