<?php
	$conexao = mysqli_connect("localhost", "root", "", "portifolio") or trigger_error(mysql_error());
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = hash('sha512', $_POST['senha']) ;
	$senha2 = hash('sha512', $_POST['senha2']) ;
	$errors ="";
	echo $nome;
	echo $email;
	echo $senha;
	echo $senha2;

	$pesquisarEmail = mysqli_query($conexao ," SELECT * FROM usuario WHERE email = '$email' ");
	$contador = mysqli_num_rows($pesquisarEmail);
//	mysqli_fetch_array($res);
	
	if($contador == 1){
		$errors .= "Login escolhido j� cadastrado.<br>";
	}else{
		echo "N�o encontrou esse email na nossa base de dados";
	}
	if ( $email == "" ) {
			  $errors .= "Voc� n�o digitou um login<br>"; //confere se o campo login n�o ficou vazio
			  }
		
			if ( $senha == "" ) {
				  $errors .= "Voc� n�o digitou uma senha<br>"; //confere se o campo senha n�o ficou vazio
				  }
			
				if ( $senha != $senha2 ) {
					  $errors .= "Voc� digitou 2 senhas diferentes.<br>"; //adiciona o erro caso o usu�rio digitou 2 senhas diferentes
					  }
	if($errors == ""){
		$cadastrar = mysqli_query($conexao , " INSERT INTO usuario( email , senha , nome) VALUES(  '$email' ,'$senha'  , '$nome') ");
	}
	if($cadastrar == 1){
		echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif><br><br><br>Cadastro com sucesso.</font></div>";
	}else{
		echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif><br><br><br>Houve uma fala no servidor.</font></div>";
	}
?>