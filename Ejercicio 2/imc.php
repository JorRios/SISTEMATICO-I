<?php 

	$Peso = $_POST['Peso'];
	$Altura = $_POST['Altura'];

	$resultado = $Peso	/ ($Altura * $Altura);

	echo "El IMC es de:",  $resultado;

 ?>