<?php
require "includes/connection.php" ;

$id = $_GET['id'];

$sql_exclui_usuario = "DELETE FROM usuario WHERE id = {$id}";

try {
	
	$conexao->query($sql_exclui_usuario);
	$msg = "Usuário deletado!";
	$tipo_msg = "success";

	header("Location: usuarios.php?msg={$msg}&tipo_msg={$tipo_msg}");

} catch (Exception $e) {
	$msg = "Não foi possível deletar! Erro: {$e->getMessage()}";
	$tipo_msg = "danger";

	header("Location: usuarios.php?msg={$msg}&tipo_msg={$tipo_msg}");
}

?>