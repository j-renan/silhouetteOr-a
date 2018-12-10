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
  <h1>Orçamentos</h1>
  <hr/>
  <br/>
  <!--<form action="../controller/cliente-ctrl.php" method="post" id="formCliente">

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
    </form>-->
    </br>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <!-- cabecalho da tabela -->
                <thead>
                <tr>
                    <th>Data</th>
                    <th>Cliente</th>
                    <th>Criança</th>
                    <th>Produto</th>
                    <th>Total</th>
                    <th>Ações</th>
                </tr>
                </thead>

                <!-- corpo da tabela -->
                <tbody>
                    <tr>
                        <td>10/12/2018</td>
                        <td>Moises</td>
                        <td>Carol</td>
                        <td>Latinha, Caixa, Letra, baldinho</td>
                        <td>R$ 56,89</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10/12/2018</td>
                        <td>Moises</td>
                        <td>Carol</td>
                        <td>Latinha, Caixa, Letra, baldinho</td>
                        <td>R$ 56,89</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10/12/2018</td>
                        <td>Moises</td>
                        <td>Carol</td>
                        <td>Latinha, Caixa, Letra, baldinho</td>
                        <td>R$ 56,89</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10/12/2018</td>
                        <td>Moises</td>
                        <td>Carol</td>
                        <td>Latinha, Caixa, Letra, baldinho</td>
                        <td>R$ 56,89</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10/12/2018</td>
                        <td>Moises</td>
                        <td>Carol</td>
                        <td>Latinha, Caixa, Letra, baldinho</td>
                        <td>R$ 56,89</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10/12/2018</td>
                        <td>Moises</td>
                        <td>Carol</td>
                        <td>Latinha, Caixa, Letra, baldinho</td>
                        <td>R$ 56,89</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>

    <!--incluindo arquivos necessarios para a biblioteca-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>
