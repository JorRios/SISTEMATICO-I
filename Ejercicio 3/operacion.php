<?php 
	
	$horas = $_POST['horas'];


$Pagohora = 30;
$Pagocompleto = $horas * $Pagohora;

$INSS = $Pagocompleto * 0.15;

$IR = $Pagocompleto * 0.06;

$Total = $Pagocompleto - $INSS - $IR;


echo "El pago por Hora es: ", $Pagohora;
echo "<br>";
echo "El pago sin ninguna deduccion es: ", $Pagocompleto;
echo "<br>";
echo "La reduccion de INSS es: ", $INSS;
echo "<br>";
echo "La reduccion de IR es: ", $IR;
echo "<br>";
echo "<br>";
echo "EL SALARIO TOTAL ES DE:", $Total;

?>