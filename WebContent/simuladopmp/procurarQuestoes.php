<?php
 	$tipoQuestao = $_GET['tipoQuestoes'];
 	echo $tipoQuestao;
	header ('Location: selecionarQuestao.php?tipoQuestoes='.$tipoQuestao);
	
?>