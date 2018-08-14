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
  <form action="">
  <!--linha um id, nome, cep-->
    <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control" name="id" readonly/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome"/>
          </div>
        </div>
		<div class="col-md-3">
          <div class="form-group">
            <label>CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" />			
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
            <input type="date" class="form-control" name="data-nascimento"/>
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
            <input type="text" class="form-control cpf" name="cpf"/>
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <label>Telefone</label>
            <input type="number" class="form-control" name="telefone"/>
          </div>
        </div>
    </div>

    <!--linha quatro cidade, e-mail-->
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" name="email"/>
          </div>
        </div>
    </div>

    <!--adicionando botoes-->
    <div class="row">
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary">
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

  </div>

    <!--incluindo arquivos necessarios para a biblioteca-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.mask.js"></script>

    <script>
      $(document).ready(aplicarMascaras);

      function aplicarMascaras() {
        $('.cpf').mask('000.000.000-00');        
      }
	  
	  // função para buscar endereço pelo cep
	  function buscarEndereco() {
		var cep = document.getElementById("cep");		  
		  
		$.getJSON("https://viacep.com.br/ws/"+ cep.value +"/json/?callback=?", recebeEndereco);
	  }
	  
	  function recebeEndereco(end) {
		  console.log('endereco = ', end);
		  var endereco = document.getElementById('endereco');		  
		  endereco.value = end.logradouro + ",    " + end.bairro;
	  }

    </script>
</body>
</html>
