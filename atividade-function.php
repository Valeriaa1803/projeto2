<?php 

function calculadora ($tipo, $num1, $num2){
	switch ($tipo) {
		case 'soma':
			$resultado = "A $tipo entre $num1 e $num2 e igual a <strong>".($num1 + $num2)."</strong>";
			break;

			case 'subtração':
			$resultado = "A $tipo entre $num1 e $num2 e igual a <strong>".($num1 - $num2)."</strong>";
			break;

			case 'divisão':
			$resultado = "A $tipo entre $num1 e $num2 e igual a <strong>".($num1 / $num2)."</strong>";
			break;

			case 'multiplicação':
			$resultado = "A $tipo entre $num1 e $num2 e igual a <strong>".($num1 + $num2)."</strong>";
			break;
		
		default:
			$resultado = "Tipo de operação não é válido!";
			break;
		}

		return $resultado;
	}

	function calculadoraif ($tipo, $num1, $num2){

		if ($tipo == 'soma' ){
			$resultado = " A $tipo entre $num1 e $num2 é igual a <strog>". ($num1  + $num2). "</strog>"; 

		} else if ($tipo =='subtração' ) {
			$resultado = " A $tipo entre $num1 e $num2 é igual a <strog>". ($num1  - $num2). "</strog>"; 

		}else if ($tipo =='divisão' ) {
			$resultado = " A $tipo entre $num1 e $num2 é igual a <strog>". ($num1  / $num2). "</strog>"; 

		}else if ($tipo =='multiplicação' ) {
			$resultado = " A $tipo entre $num1 e $num2 é igual a <strog>". ($num1  * $num2). "</strog>"; 

		}else {
			$resultado = 'Tipo passado não e válido';
		}
	}

	echo  calculadora ('divisão', 50, 50);
	echo '<br>';
	echo '<br>';
	echo calculadoraif ('multiplicação', 16, 4);
  ?>