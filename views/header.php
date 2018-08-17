<nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Silhouette Orça</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php 
          $paginaLink = basename($_SERVER['SCRIPT_NAME']);		  
        ?>
          <ul class="nav navbar-nav">
            <li <?php if($paginaLink == "cliente.php") {echo 'class="active"';}else{echo 'class=""';} ?>><a href="cliente.php" >Clientes</a></li>
            <li <?php if($paginaLink == "produto.php") {echo 'class="active"';}else{echo 'class=""';} ?>><a href="produto.php" >Produtos</a></li>
            <li <?php if($paginaLink == "material.php") {echo 'class="active"';}else{echo 'class=""';} ?>><a href="material.php" >Materiais</a></li>
            <li <?php if($paginaLink == "precificacao.php") {echo 'class="active"';}else{echo 'class=""';} ?>><a href="precificacao.php" >Precificação</a></li>
            <li <?php if($paginaLink == "orcamento.php") {echo 'class="active"';}else{echo 'class=""';} ?>><a href="orcamento.php">Orçamentos</a></li>                       
          </ul>
        </div>
      </div>
  </nav>
  
	<script>
		// codigo que verifica a pagina clicada para alterar variaveis de localstorage
		var paginaCorrente = "<?php echo $paginaLink?>";
		
		var localStorageAcao = localStorage.getItem('acao');	
		if (paginaCorrente != "produto.php") {
			localStorage.removeItem('acao');
		}

    var localStorageAcaoMaterial = localStorage.getItem('acaoMaterial');	
		if (paginaCorrente != "material.php") {
			localStorage.removeItem('acaoMaterial');
		}

    var localStorageAcaoCliente = localStorage.getItem('acaoCliente');	
		if (paginaCorrente != "cliente.php") {
			localStorage.removeItem('acaoCliente');
		}
	</script>	