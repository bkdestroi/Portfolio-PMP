
<?php require_once("usuario.php"); ?>
<?php 
	session_start();
 	$email = $_POST['email'];
 	$senha = hash('sha512', $_POST['senha']) ;
 	
 	$pdo = new PDO('mysql:host=localhost;dbname=portifolio', 'root', '');
 	 $stmt = $pdo->prepare('select * from usuario where email = :email AND senha = :senha');
 	  $stmt->bindValue(':email', $email);
 	  $stmt->bindValue(':senha', $senha);
 	   $run = $stmt->execute();
 	   $result = $stmt->fetch(PDO::FETCH_ASSOC);
 	    var_dump($result);
 	    
 	if($result['nome'] != ""){
 		$objeto = new Usuario();
 		$objeto ->setId($result['id']);
 		$objeto ->setNome($result['nome']);
 		$objeto ->setEmail($result['email']);
 		$objeto ->setSenha($result['senha']);
 		echo $objeto->getNome();
 		$_SESSION['logado'] = TRUE;
 		$_SESSION['usuarioSessionNome'] = $objeto->getNome();
 		$_SESSION['usuarioSessionId'] = $objeto->getId();
 		$_SESSION['usuarioSessionSenha'] = $objeto->getEmail();
 		$_SESSION['usuarioSessionEmail'] = $objeto->getSenha();
 		header ('Location: index.php');
 	}else{
 		header ('Location: login.php');
 	}

 	
?>
