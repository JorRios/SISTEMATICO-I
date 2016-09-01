<?php 
	$Distancia = $_POST['Distancia'];

	if(!empty($_POST['cm'])){
		$cm=$_POST['cm'];
		echo "Equivale a:";
		echo $Distancia.' cm';
		echo '<br>';
	}

	if (!empty($_POST['pulg'])){
		$pul=$_POST['pulg'];
		echo "Equivale a:";
		echo ($Distancia/2.5).' pulg';
		echo '<br>';
	}
	if(!empty($_POST['mt'])){
		$mt=$_POST['mt'];
		echo "Equivale a:";
		echo ($Distancia/100).' mt';
		echo '<br>';
	}
	if(!empty($_POST['km'])){
		$km=$_POST['km'];
		echo "Equivale a:";
		echo ($Distancia/100000).' km';
	}

?>