<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MVC 4 Noobs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<script src="../assets/js/main.js"></script>
	<script src="../assets/js/popper.js"></script>
	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/bootstrap.js" ></script>
</head>
<body>
	<?php include("includes/navbar.php");?>
	<form method="POST" class="need-validation" action="user/registerUser">
		<div class="form-group container mt-3">
			<label for="name" class="h4">Nome:</label>
			<input class="form-control" type="text" name="name" required>
		</div>
		<div class="form-group container mt-3">
			<label for="email" class="h4">E-mail:</label>
			<input type="email" class="form-control" name="email" placeholder="example@example.com" required>
		</div>
		<div class="form-group container mt-3">
			<label for="password" class="h4">Senha:</label>
			<input type="password" class="form-control" name="password" placeholder="Digite sua senha." required>
		</div>
		<div class="form-group container mt-3">
			<label for="rpassword" class="h4">Confirme sua Senha:</label>
			<input type="password" class="form-control" name="rpassword" placeholder="Confirme sua senha." required>
		</div>
		<div class="form-group container mt-3">
			<label for="sex" class="h4">Sexo:</label>
			<select class="custom-select" name="sex" required>
				<option selected>Escolha...</option>
    			<option value="1">Masculino</option>
    			<option value="2">Feminino</option>
			</select>
		</div>
		<div class="form-group container mt-3">
			<label for="birthDate" class="h4">Data de Nascimento:</label>
			<input type="date" class="form-control" name="birthDate" required>
		</div>
		<div class="form-group container mt-3">
		<button type="submit" class="btn btn-dark my-1">Registrar</button>
		</div>
	</form>
</body>
</html>