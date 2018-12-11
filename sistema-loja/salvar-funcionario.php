<?php  

require "includes/connection.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$id_cargo = $_POST['id_cargo'];
$cpf = $_POST['cpf'];
$matricula = $_POST['matricula'];
$dt_nascimento = $_POST['telefone'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$dt_admissao = $_POST['dt_admissao'];

$sql_isere_funcionario = "INSERT INTO funcionarios (nome, id_cargo, cpf, matricula, dt_nascimento, email, sexo, dt_admissao)
	VALUES ('{$nome}', ('{$id_cargo}', ('{$cpf}', ('{$matricula}', ('{$dt_nascimento}', ('{$email}', ('{$sexo}', ('{dt_nascimento}')";

	if $sql_funcionario = "UPDATE funcionarios SET nome = '{$nome}', id_cargo = '{$id_cargo}', cpf = '{$cpf}', matricula = '{$matricula}', dt_nascimento = '{$dt_nascimento}', email = '{$email}', sexo = '{$sexo}', dt_admissao = '{$dt_admissao}' WHERE id = {$id}";
	} else {
		$sql_funcionario = "UPDATE funcionarios SET nome = '{$nome}', id_cargo = '{$id_cargo}', cpf = '{$cpf}', matricula = '{$matricula}', dt_nascimento = '{$dt_nascimento}', email = '{$email}', sexo = '{$sexo}', dt_admissao = '{$dt_admissao}' WHERE id = {$id}";
	}
	$msg = "funcionário alterado com sucesso!";
}

if($conexao->query($sql_funcionario)){
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível executar a solicitação!";
	$tipo_msg = "danger";
}

header("Location: funcionarios.php?msg={$msg}&tipo_msg={$tipo_msg}");
?>



?>
