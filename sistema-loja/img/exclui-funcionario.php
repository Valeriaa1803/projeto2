<?php
require "includes/connection.php" ;

$id = $_GET['id'];

$sql_exclui_funcionario = "DELETE FROM funcionarios WHERE id = {$id}";

try {
	
	$conexao->query($sql_exclui_funcionario);
	$msg = "funcionario deletado!";
	$tipo_msg = "success";

	header("Location: funcionarios.php?msg={$msg}&tipo_msg={$tipo_msg}");

} catch (Exception $e) {
	$msg = "Não foi possível deletar! Erro: {$e->getMessage()}";
	$tipo_msg = "danger";

	header("Location: funcionarios.php?msg={$msg}&tipo_msg={$tipo_msg}");
}

?>