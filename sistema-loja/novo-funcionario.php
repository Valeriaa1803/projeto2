<?php 
include "layout/header.php";
include "layout/menu.php";

require "includes/connection.php";

$title = "Novo Funcinário";

if(isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET['id'];
	$sql_funcionario = "SELECT * FROM funcionarios WHERE id = {$id}";
	$dados_funcionario = $conexao->query($sql_funcionario)->fetch_assoc();

	$title = "Editar Funcinário";
}

$sql_cargos = "SELECT * FROM cargo";
	$cargos = $conexao->query($sql_cargos);
?>


<div class="container">
	<p>&nbsp;</p>
	<h1><?php echo $title; ?></h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item"><a href="usuarios.php">Funcionários</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
			  </ol>
			</nav>
		</div>
	</div>

	<div class="row">
		<div class="col-3"></div>		
		<div class="col">
			
			<form method="post" action="salvar-funcionario.php">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" name="nome" id="nome" class="form-control" required  value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['nome'] : ''); ?>">
					<input type="hidden" name="id" value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['id'] : ''); ?>">
				</div>

				<div class="col">
					<div class="form-group">
						<label for="id_cargo">Cargo:</label>
						
						<select name="id_cargo" class="form-control" required>
							<option value="">Escolha o Cargo</option>
							<?php while($cargo = $cargos->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $cargo['id'] ?>"

									<?php 
										if(isset($dados_cargo) && $dados_cargo['id_cargo'] == $cargo['id']) { echo 'selected="selected"'; }
									 ?>

									>
									<?php echo $cargo['descricao'] ?>
										
									</option>
							<?php } ?>

						</select>


					</div>

				<div class="form-group">
					<label for="cpf">CPF:</label>
					<input type="text" name="cpf" id="cpf" class="form-control" required  value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['nome'] : ''); ?>">
					<input type="hidden" name="id" value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['id'] : ''); ?>">
				</div>

				<div class="form-group">
					<label for="matricula">Matricula:</label>
					<input type="text" name="matricula" id="matricula" class="form-control" required  value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['nome'] : ''); ?>">
					<input type="hidden" name="id" value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['id'] : ''); ?>">
				</div>

				<div class="form-group">
					<label for="dt_nascimento">Data de Nascimento:</label>
					<input type="date" name="dt_nascimento" id="dt_nascimento" class="form-control" required  value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['nome'] : ''); ?>">
					<input type="hidden" name="id" value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['id'] : ''); ?>">
				</div>

				<div class="form-group">
					<label for="telefone">Telefone:</label>
					<input type="text" name="telefone" id="telefone" class="form-control" required  value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['nome'] : ''); ?>">
					<input type="hidden" name="id" value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['id'] : ''); ?>">
				</div>


				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" name="email" id="email" class="form-control" required  
					value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['email'] : ''); ?>">
				</div>

				<div class="form-group">
					<label for="sexo">Sexo:</label>
					<select name="sexo" class="form-control">
						<option value="Feminino">Feminino</option>
						<option value="Masculino">Masculino</option>
						
					</select>
				</div>

					<div class="form-group">
					<label for="dt_admissao">Data de Admissão:</label>
					<input type="date" name="dt_admissao" id="dt_admissao" class="form-control" required  
					value="<?php echo(isset($dados_funcionario) ? $dados_funcionario['email'] : ''); ?>">
				</div>
				
				
				</div>
				<button class="btn btn-primary float-right" type="submit">Salvar</button>
			</form>


		</div>		
		<div class="col-3"></div>		
		
	</div>

</div>
<?php 
include "layout/footer.php";
?>