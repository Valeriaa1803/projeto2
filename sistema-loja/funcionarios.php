<?php 
include "layout/header.php";
include "layout/menu.php";

require "includes/connection.php";

$sql_funcionarios = "SELECT * FROM funcionarios";
$funcionarios = $conexao->query($sql_funcionarios);

?>

<div class="container">
	<p>&nbsp;</p>
	<h1>Funcionários</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Funcionários</li>
			  </ol>
			</nav>
		</div>
	</div>

	<div class="row-3">
		
		<div class="">
			<a href="novo-funcionario.php" class="btn btn-primary">
				Novo Funcionário
			</a>
		</div>
		<div class="row">
		<p>&nbsp;</p>
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Cargo</th>
					<th>CPF</th>
					<th>Matricula</th>
					<th>Data de Nascimento</th>
					<th>Telefone</th>
					<th>E-mail</th>
					<th>Sexo</th>
					<th>Data de Admissão</th>

				</tr>
			</thead>
			<tbody>
				<?php while($funcionario = $funcionarios->fetch_array(MYSQLI_ASSOC)) { ?>
					<tr>
						<td><?php echo $funcionario['id']; ?></td>
						<td><?php echo $funcionario['nome']; ?></td>
						<td><?php echo $funcionario['id_cargo']; ?></td>
						<td><?php echo $funcionario['cpf'] ?></td>
						<td><?php echo $funcionario['matricula']; ?></td>
						<td><?php echo $funcionario['dt_nascimento']; ?></td>
						<td><?php echo $funcionario['telefone']; ?></td>
						<td><?php echo $funcionario['email']; ?></td>
						<td><?php echo $funcionario['sexo']; ?></td>
						<td><?php echo $funcionario['dt_admissao'] ?></td>
						<td>
							<a href="novo-funcionario.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-warning">
								<i class="fas fa-edit"></i>
							</a>

							<a href="exclui-funcionario.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir?')">
								<i class="fas fa-trash"></i>
							</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
	</div>

</div>
<?php 
include "layout/footer.php";
?>