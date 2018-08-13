<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Silhouette Orça Materiais</title>
    <!--incluindo arquivo css-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!--barra de navegação-->
  <?php include './header.php';?>

<div class="container">
  <h1>Cadastro de Materiais</h1>
  <hr/>
  <br/>
  <form action="../controller/material-ctrl.php" method="post" id="formMaterial">

  <!-- campo oculto para usar na exclusao de material -->
  <input type="hidden" name="excluirMaterial" id="excluirMaterial" value="0" />

  <!--linha um nome, preço unitario-->
    <div class="row">
    <div class="col-md-1">
			<div class="form-group">
				<label>ID</label>
            <input type="text" class="form-control" name="materialId" id="materialId" readonly/>
          </div>
		</div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Material</label>
            <input type="text" class="form-control" name="material" id="material" required />
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label>Preço Unitário</label>
            <input type="text" class="form-control" name="preco" id="preco" required />
          </div>
        </div>
    </div>

    

    <!--adicionando botoes-->
    <div class="row">
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary" name="Submit" value="salvar" id="cadastrarMaterial">
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

    <!-- mensagem de cadastro de material-->	
    <div class="alert alert-success" role="alert" style="display: none;" id="mensagem">
		<span id="texto"></span>
		<span class="pull-right" style="cursor: pointer;" onclick="removerMensagem()">X</span>

  </div> 

    <!-- janela de confirmação para excluir material -->
  <div class="modal fade" id="janelaExcluirMaterial" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Excluir Material</h4>
      </div>
      <div class="modal-body">
		<strong>
			<p id="mensagemExcluirMaterial"></p>
		</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="removerMaterial" onclick="excluirMaterialConfirmar()">Confirmar</button>
      </div>
    </div>
  </div>
</div>

    <?php include './material-tabela.php';?>

  </div>

    <!--incluindo arquivos necessarios para a biblioteca-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.mask.js"></script>

    <!-- exibe a mensagem conforme a ação, cadastrar, atualizar, excluir -->
	
	<script>		
    var mensagem = document.getElementById("mensagem");
    var texto = document.getElementById("texto");
	var botaoRemover = document.getElementById("removerMaterial");
	var botaoCadastrar = document.getElementById("cadastrarMaterial");
				
	botaoRemover.addEventListener("click", exibirMensagemRemover);
    botaoCadastrar.addEventListener("click", exibirMensagemCadastrar);
		
	function exibirMensagemRemover() {
		localStorage.setItem('acaoMaterial', 'remover');		
   	}

    function exibirMensagemCadastrar() {				
		
      var campoMaterialId = document.getElementById("materialId");
	  
      if (campoMaterialId.value == "") {
        localStorage.setItem('acaoMaterial', 'cadastrar');
      } else {
        localStorage.setItem('acaoMaterial', 'editar');	 
      }               
    }
		
	// codigo que verifica a mensagem do produto a ser exibida
	var localStorageAcao = localStorage.getItem('acaoMaterial');    
		
		
	if (localStorageAcao == "remover") {			
		
		mensagem.style.display = "block";		
		texto.textContent="Material removido com sucesso ! ";
		
	} else if (localStorageAcao == "cadastrar") {
		
		mensagem.style.display = "block";		
		texto.textContent="Material cadastrado com sucesso ! ";

	} else if (localStorageAcao == "editar") {

		mensagem.style.display = "block";		
		texto.textContent="Material atualizado com sucesso ! ";
    
  }

    function removerMensagem() {
      mensagem.style.display = "none";
	  localStorage.removeItem('acaoMaterial');
    }
	
	</script>

    <script>
      $(document).ready(aplicarMascaras);

      function aplicarMascaras() {
        $('.preco').mask('000.000.000,00', {reverse: true});        
		
      }

    </script>
</body>
</html>
