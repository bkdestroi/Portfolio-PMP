<!DOCTYPE html>

<head>
    <title>Portifolio GC</title>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href=css/meucss.css rel="stylesheet" >
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div id="container-cadastro">

<form class="form-cadastro" name="cadastrar" method="post" action="enviar_cadastro.php">
<fieldset>

<div class="control-group">
  <div class="controls">
  <label class="control-label">Nome</label>
    <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control" required="required">
  </div>
</div>

<div class="control-group">
  <div class="controls">
  <label class="control-label">Email</label>
     <input class="form-control" name="email" type="email" autofocus="autofocus" required="required" placeholder="Email">
  </div>
</div>

<div class="control-group">
  <div class="controls">
  	 <label class="control-label">Senha</label>
     <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control" required="required">
  </div>
</div>

<div class="control-group">
  <div class="controls">
     <label class="control-label">Repita Senha</label>
     <input id="senha" name="senha2" type="password" placeholder="Digite a senha novamente" class="form-control" required="required">
  </div>
</div>

<div class="control-group">
  <label class="control-label"></label>
  <div class="controls">
    <button id="enviar" name="enviar" class="btn  btn-primary ">Enviar</button>
    <button id="limpar" name="limpar" class="btn btn-primary">Limpar Dados</button>
  </div>
</div>
</fieldset>
</form>
</div>
</body>
