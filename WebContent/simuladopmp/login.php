<!DOCTYPE html>
<html>
	<head>
	<title>Portifolio GC</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="bootstrap/css/signin.css"/>
	</head>
	
	<body>
	
	<form class="form-signin" action="validarLogin.php" method="POST">
		<h2 class="form-signin-heading">Acesso ao Simulado OnLine</h2>
		<input class="form-control" name="email" type="email" autofocus="autofocus" required="required" placeholder="Email">
		<input class="form-control" name="senha" type="password" required="required" placeholder="Senha">
		<label class="checkbox">
		<input type="checkbox" value="remember-me">
		Lembrar
		</label>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
	</form>
	
	</body>
</html>