<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Silhouette Orça Produtos</title>
    <!--incluindo arquivo css-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!--barra de navegação-->
  <?php 
    include './header.php';	
  ?>

<div class="container">
  <h1>Cadastro de Produto</h1>
  <hr/>
  <br/>
  <form action="../controller/produto-ctrl.php" method="post" id="formProduto">
  
  <!-- campo oculto para usar na exclusao de produto -->
  <input type="hidden" name="excluirProduto" id="excluirProduto" value="0" />
  
  <!--linha um id, nome, ativo-->
    <div class="row">
		<div class="col-md-1">
			<div class="form-group">
				<label>ID</label>
            <input type="text" class="form-control" name="produtoId" id="produtoId" readonly/>
          </div>
		</div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Produto</label>
            <input type="text" class="form-control" name="produto" id="produto" required/>
          </div>
        </div>
        <div class="col-md-5">
          <div class="checkbox">
            <br/>
            <label>
              <input type="checkbox" name="ativo" value="true" checked> Ativo
            </label>
          </div>  
        </div>       
    </div> 

    <!--adicionando botoes-->
    <div class="row">
      <div class="col-md-2">
        <button class="btn btn-primary" id="cadastrarProduto">
          SALVAR <span class="glyphicon glyphicon-plus-sign"></span>
        </button>
      </div>
      <div class="col-md-2">
        <button type="reset" class="btn btn-info">
          LIMPAR <span class="glyphicon glyphicon-erase"></span>
        </button>
      </div>
    </div>
    </form>
    <br/>

    <!-- mensagem de cadastro de produto-->	
    <div class="alert alert-success" role="alert" style="display: none;" id="mensagem">
		<span id="texto"></span>
		<span class="pull-right" style="cursor: pointer;" onclick="removerMensagem()">X</span>
	</div> 

  <br/>
    <?php include './produto-tabela.php';?>
  </div>
  
  <!-- janela de confirmação para excluir produto -->
  <div class="modal fade" id="janelaExcluirProduto" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Excluir Produto</h4>
      </div>
      <div class="modal-body">
		<strong>
			<p id="mensagemExcluirProduto"></p>
		</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="removerProduto" onclick="excluirProdutoConfirmar()">Confirmar</button>
      </div>
    </div>
  </div>
</div>

    <!--incluindo arquivos necessarios para a biblioteca-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    
	<!-- exibe a mensagem conforme a ação, cadastrar, atualizar, excluir -->
	
	<script>		
    var mensagem = document.getElementById("mensagem");
    var texto = document.getElementById("texto");
	var botaoRemover = document.getElementById("removerProduto");
	var botaoCadastrar = document.getElementById("cadastrarProduto");
				
	botaoRemover.addEventListener("click", exibirMensagemRemover);
    botaoCadastrar.addEventListener("click", exibirMensagemCadastrar);
		
	function exibirMensagemRemover() {
		localStorage.setItem('acao', 'remover');		
   	}

    function exibirMensagemCadastrar() {				
		
      var campoProdutoId = document.getElementById("produtoId");
	  
      if (campoProdutoId.value == "") {
        localStorage.setItem('acao', 'cadastrar');
      } else {
        localStorage.setItem('acao', 'editar');	 
      }               
    }
		
	// codigo que verifica a mensagem do produto a ser exibida
	var localStorageAcao = localStorage.getItem('acao');    
		
		
	if (localStorageAcao == "remover") {			
		
		mensagem.style.display = "block";		
		texto.textContent="Produto removido com sucesso ! ";
		
	} else if (localStorageAcao == "cadastrar") {
		
		mensagem.style.display = "block";		
		texto.textContent="Produto cadastrado com sucesso ! ";

	} else if (localStorageAcao == "editar") {

		mensagem.style.display = "block";		
		texto.textContent="Produto atualizado com sucesso ! ";
    
  }

    function removerMensagem() {
      mensagem.style.display = "none";
	  localStorage.removeItem('acao');
    }
	
	</script>
		
    </body>
</html>
