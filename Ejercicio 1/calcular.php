<?php 

	$numero = $_POST['numero'];
	$moneda = $_POST['moneda'];
	$precio = 29;
	$conversion;

	if ($moneda == 2) 
		{
		$conversion = $numero * $precio;

		 echo "De  Dolares a cordobas:", $conversion;
		}

	else
	{
		if ($moneda == 1)
		{
			$conversion = $numero / $precio;

			echo "De cordobas a Dolares:", $conversion;
		}
	}	
?>