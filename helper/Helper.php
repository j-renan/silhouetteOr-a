<?php
	// se não tiver sessão iniciada, inicia a sessão
	echo "SESSAO ".session_status();	
	if(session_status() != 1) {				
	   session_start();
	   $_SESSION['produto_cadastrado'] = 'nao';
	}    
	
	/*echo "produto ".$_SESSION['produto_cadastrado'];
	if ($_SESSION['produto_cadastrado'] != 'sim') {
		echo "entrou no if";
		$_SESSION['produto_cadastrado'] = 'nao';
	}*/	
?>