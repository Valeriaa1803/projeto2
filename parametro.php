<?php
$b = 50;
$c = 10;

function calculo($tipo, $num1, $num2) {
switch ($tipo) {
case 'soma':
$calc = "A $tipo é igual a: " .($num1 + $num2). ".";
break;

case 'subtração':
$calc = $num1 - $num2;
break;

case 'multiplicação':	
$calc = $num1 * $num2;
break;

case 'divisão':	
$calc = $num1 / $num2;
break;


}

return $calc; 
}

function calculoIF ($tipo, $num1, $num2) {
if($tipo == 'soma') {
$calc = $num1 + $num2;
} 

else if ($tipo == 'subtração') {
$calc = $num1 - $num2;
} 

else if ($tipo == 'multiplicação') {
$calc = $num1 * $num2;
}

else if ($tipo == 'divisão') {
$calc = $num1 / $num2;
}

return $calc;
}


$tipo = $_GET['tipo'] ?? 'soma';
$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;



echo calculo($tipo, $num1, $num2);
echo '<br>';
echo '<br> Segunda forma com IF <br>';
echo calculoIF($tipo, $num1, $num2);




?>

<?php
$tipo = 'multiplicação';
$num1 = rand(1, 11);
$num2 = 69;

?>

