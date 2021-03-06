<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Silhouette Orça Clientes</title>
    <!--incluindo arquivo css-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!--barra de navegação-->
  <?php include './header.php';?>

<div class="container">
  <h1>Cadastro de Clientes</h1>
  <hr/>
  <br/>
  <form action="../controller/cliente-ctrl.php" method="post" id="formCliente">

  <!-- campo oculto para usar na exclusao de material -->
  <input type="hidden" name="excluirCliente" id="excluirCliente" value="0" />

  <!--linha um id, nome, cep-->
    <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control" name="clienteid" id="clienteid" readonly/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="cliente" id="cliente"/>
          </div>
        </div>
		<div class="col-md-3">
          <div class="form-group">
            <label>CEP</label>
            <input type="text" class="form-control cep" name="cep" id="cep" 
				onblur="buscarEndereco()" />			
          </div>		  		  
        </div>
		<div class="col-md-1" style="margin-top: 24px;">
			<a class="btn btn-primary" onclick="buscarEndereco()">
				<span class="glyphicon glyphicon-search"></span>
			</a>
		</div>
    </div>

    <!--linha dois data nascimento, endereço-->
    <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" class="form-control" name="data_nascimento" id="data_nascimento"/>
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <label>Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco"/>
          </div>
        </div>
    </div>

    <!--linha tres cpf, telefone-->
    <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>CPF</label>
            <input type="text" class="form-control cpf" name="cpf" id="cpf"/>
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <label>Telefone</label>
            <input type="text" class="form-control tel" name="telefone" id="telefone"
				onblur="acertarMascaraTelefone()" onfocus="resetMascaraTelefone()"/>
          </div>
        </div>
    </div>

    <!--linha quatro cidade, e-mail-->
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" name="email" id="email"/>
          </div>
        </div>
    </div>

    <!--adicionando botoes-->
    <div class="row">
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary" id="cadastrarCliente">
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
    </br>

    <!-- mensagem de cadastro de Cliente-->	
    <div class="alert alert-success" role="alert" style="display: none;" id="mensagem">
		<span id="texto"></span>
		<span class="pull-right" style="cursor: pointer;" onclick="removerMensagem()">X</span>

  </div>

  <!-- janela de confirmação para excluir cliente -->
  <div class="modal fade" id="janelaExcluirCliente" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Excluir Cliente</h4>
      </div>
      <div class="modal-body">
		<strong>
			<p id="mensagemExcluirCliente"></p>
		</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="removerCliente" onclick="excluirClienteConfirmar()">Confirmar</button>
      </div>
    </div>
  </div>
</div>

    <?php include './cliente-tabela.php';?>

  </div>

    <!--incluindo arquivos necessarios para a biblioteca-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.mask.js"></script>

    <!-- exibe a mensagem conforme a ação, cadastrar, atualizar, excluir -->
    <script>
    var mensagem = document.getElementById("mensagem");
    var texto = document.getElementById("texto");
	var botaoRemover = document.getElementById("removerCliente");
	var botaoCadastrar = document.getElementById("cadastrarCliente");
				
	botaoRemover.addEventListener("click", exibirMensagemRemover);
  botaoCadastrar.addEventListener("click", exibirMensagemCadastrar);
		
	function exibirMensagemRemover() {
		localStorage.setItem('acaoCliente', 'remover');		
   	}

    function exibirMensagemCadastrar() {				
		
      var campoClienteId = document.getElementById("clienteid");
	  
      if (campoClienteId.value == "") {
        localStorage.setItem('acaoCliente', 'cadastrar');
      } else {
        localStorage.setItem('acaoCliente', 'editar');	 
      }               
    }
		
	// codigo que verifica a mensagem do cliente a ser exibida
	var localStorageAcao = localStorage.getItem('acaoCliente');    
		
		
	if (localStorageAcao == "remover") {			
		
		mensagem.style.display = "block";		
		texto.textContent="Cliente removido com sucesso ! ";
		
	} else if (localStorageAcao == "cadastrar") {
		
		mensagem.style.display = "block";		
		texto.textContent="Cliente cadastrado com sucesso ! ";

	} else if (localStorageAcao == "editar") {

		mensagem.style.display = "block";		
		texto.textContent="Cliente atualizado com sucesso ! ";
    
  }

    function removerMensagem() {
      mensagem.style.display = "none";
	  localStorage.removeItem('acaoCliente');
    }
	
	
	// codigo que aplica as mascaras nos campos e busca o endereço pelo cep
      $(document).ready(aplicarMascaras);

      function aplicarMascaras() {
        $('.cpf').mask('000.000.000-00');        
		$('.tel').mask('(00) 00000-0000');
		$('.cep').mask('00.000-000');
      }
	  
	  function acertarMascaraTelefone() {
		  var campoTelefone = document.getElementById('telefone');
		  var telefoneValor = campoTelefone.value;		  
		  		  
		  if (telefoneValor.length == 15) {
			  $('.tel').mask('(00) 00000-0000');
		  } else if (telefoneValor.length == 14) {
			  $('.tel').mask('(00) 0000-0000');
		  }
	  }
	  
	  function resetMascaraTelefone() {
		$('.tel').mask('(00) 00000-0000');
	  }
	  
	  // função para buscar endereço pelo cep
	  function buscarEndereco() {
		var cep = document.getElementById("cep");		  
		var cepSemPonto = cep.value.replace(".", "");
		var cepOk = cepSemPonto.replace("-", "")
		
		$.getJSON("https://viacep.com.br/ws/"+ cepOk +"/json/?callback=?", recebeEndereco);
	  }
	  
	  function recebeEndereco(end) {
		  console.log('endereco = ', end);
		  var endereco = document.getElementById('endereco');		  
		  endereco.value = end.logradouro + ",    " + end.bairro;
		  
		  var cidade = document.getElementById('cidade');
		  cidade.value = end.localidade;
	  }

    </script>
</body>
</html>
