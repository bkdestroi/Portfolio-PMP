<?php
	if(isset($_GET['tipoQuestoes'])){
		$tipoQuestao = $_GET['tipoQuestoes'];
		echo"Entrou na selecionar questoes \n";
		echo"e foi escolhido o tipo de questão".$tipoQuestao;
	}
	else{
		echo" Ainda não selecionei o tipo de simulado que vou realizar";
	}
	
	
	
?>