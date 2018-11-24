<?php 

$b = 10;
$c = 20;

function resultado ($num1, $num2, $tipo) {
	
	switch ($tipo) {
		case 'soma':
			$resultado = $num1 + $num2;
			break;

		case 'subtrair':
			$resultado = $num1 - $num2;
			break;

		case 'multiplicar':
			$resultado = $num1 * $num2;
			break;
		
		default:
			echo 'Funcão não encontrada';
			break;
	}
	echo 'Resultado: '.$resultado.'.';
exit;

}
$z = resultado ($b, $c, 'soma'); 



 ?>