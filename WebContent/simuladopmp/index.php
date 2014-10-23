<!DOCTYPE html>
<html>
<?php 
session_start();
//error_reporting(E_ALL ^ E_NOTICE);
if(isset($_SESSION["logado"])){
	require_once("excel_reader2.php");
	$data = new Spreadsheet_Excel_Reader("Import_ITIL.xls");
	
	//Verifico se o usuário está logado no sistema
	if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
		header("Location: login.php");
	}
	else {
		$nome = $_SESSION['usuarioSessionNome'];
		$id = $_SESSION['usuarioSessionId'];
		$email = $_SESSION['usuarioSessionEmail'];
		$senha = $_SESSION['usuarioSessionSenha'];
	
	}
	$totalLinhas = $data->rowcount();
	$totalColunas = $data->colcount();
	$totalQuestoes = floor ($totalLinhas/20);
	$random =  rand(1,$totalQuestoes);
	echo "Randon ".$random."<br>";
	echo "total de questões".$totalQuestoes."<br>";
	echo "total de linha: " .$totalLinhas."<br>";
	echo "total colunas: ".$totalColunas."<br>";
	echo "Acessando o valor da linha C2 que no caso  a pergunta: ".$data->val(2,'C')."<br>";
}
	else{
		header ('Location: login.php');
	}

?>
<head>
    <title>Portifolio GC</title>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" >
    <link href=css/meucss.css rel="stylesheet" >
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>


<body >
	<div class="container-itens">
		<ul class="nav nav-list">
	  <li class="nav-header"></li>
	  <li class="active"><a href="#">Simulados PMP Demo</a>
	  	  <ul>
		    <li><a href="index.php?tipoQuestoes=50">50 Questões </a></li>
			    <li><a href="index.php?tipoQuestoes=100">100 Questões</a></li>
			    <li><a href="index.php?tipoQuestoes=200">200 Questões</a></li>
			  </ul>
	  </li>
	  <li class="active"><a href="#">Questões PMP Demo</a>
	  		<ul>
			    <li><a href="index.php?tipoQuestoes=integracao">Integração</a></li>
			    <li><a href="index.php?tipoQuestoes=escopo">Escopo</a></li>
			    <li><a href="index.php?tipoQuestoes=tempo">Tempo</a></li>
			    <li><a href="index.php?tipoQuestoes=custo">Custo</a></li>
			    <li><a href="index.php?tipoQuestoes=qualidade">Qualidade</a></li>
			    <li><a href="index.php?tipoQuestoes=rh">RH</a></li>
			    <li><a href="index.php?tipoQuestoes=comunicacao">Comunicação</a></li>
			    <li><a href="index.php?tipoQuestoes=risco">Riscos</a></li>
			    <li><a href="index.php?tipoQuestoes=aquisicoes">Aquisições</a></li>
			    <li><a href="index.php?tipoQuestoes=estrutura">Estrutura</a></li>
			    <li><a href="index.php?tipoQuestoes=partesinteres">Partes Interes</a></li>
			</ul>
	  </li>
	</ul>
	</div>
	<div class="container-questoes">
	
		<form class="deslogar" action="logout.php">
			<button class="btn btn-primary" type="submit" >Deslogar</button>
		</form>
		
		<form action="selecionarQuestao.php">
			<fieldset>
				<legend>Questões PMP</legend>
<!-- 				<label>Teste1: <input type="text" name="teste1"></label><br> -->
<!-- 				<label>Teste2: <input type="text" name="teste2"></label><br> -->
				<?php if(isset($_GET['tipoQuestoes'])){
				$tipoQuestoes = $_GET['tipoQuestoes'];
				$perguntaAgora = $random*20+2;
				$itemA = $random*20+3;
				$itemB = $random*20+5;
				$itemC = $random*20+7;
				$itemD = $random*20+9;
			    echo"<h5><b>".$data->val($perguntaAgora,'C')."</b></h5>";
				}?>
				<input type="radio" name="questaoSelecionada" value="A">a)<?php echo $data->val($itemA, 'D')?><br>
				<input type="radio" name="questaoSelecionada" value="B">b)<?php echo $data->val($itemB, 'D')?><br>
				<input type="radio" name="questaoSelecionada" value="C">c)<?php echo $data->val($itemC, 'D')?><br>
				<input type="radio" name="questaoSelecionada" value="D">d)<?php echo $data->val($itemD, 'D')?><br>
				
				
				<a class="btn btn-primary " type="submit">
				<span class="glyphicon glyphicon-arrow-left"></span>
				</a>
				<a class="btn btn-primary " type="submit">
				<span class="glyphicon glyphicon-arrow-right"></span>
				</a>
			
				
			</fieldset>
			
		</form>
	</div>
	
	
	
</body>
 </html>
