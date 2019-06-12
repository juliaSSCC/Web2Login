<!DOCTYPE html>
<html lang="en">
<head>
  <title>Página de Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
	  .Alinhar{
		  text-align: center;
	  }
  </style>
</head>
<body>

<div class="container">
  <h2>Cadastro de Usuário</h2>
  <p>Para cadastrar, digite seu novo usuário e senha.</p>
  <form method="POST" action="pag_cadastro.php">
    <div class="form-group">
		<div class="container">
			<label for="login">Usuário:</label>
			<input type="text" class="form-control" id="login" name="login">
    	</div>
    </div>
    <div class="form-group">
		<div class="container">
			<label for="senha">Senha:</label>
			<input type="password" class="form-control" id="senha" name="senha">
		</div>
	</div>
	<div class="container Alinhar">
		<strong>Já possui cadastro?</strong>
		<a href="index.html">
			<strong>Voltar</strong>
		</a>
		<br>
		<button type="submit" class="btn btn-primary">Cadastrar</button>
	</div>
  </form>
</div>

</body>
</html>