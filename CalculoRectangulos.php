<html>
<head>
<link rel="stylesheet" type="text/css" href="css/estilos.css">   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
</head>

<body>

<?php
include('includes/nav.php');
?>






<div style="width: 40%; margin-left: auto; margin-right: auto; margin-top: 10%;">
    <h1>Ingrese los datos para calcular lados del Rectangulo</h1>
<form method="POST" action="funciones/rectangulo.php">
<input type="number" name="base" placeholder="Ingrese la base" class="form-control">
<input type="number" name="altura" placeholder="Ingrese la altura"class="form-control">

<button type="submit">Calcular</button>

</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

