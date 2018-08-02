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
  <form action="">
  <!--linha um nome, preço unitario-->
    <div class="row">
    <div class="col-md-1">
			<div class="form-group">
				<label>ID</label>
            <input type="text" class="form-control" name="produtoId" id="produtoId" readonly/>
          </div>
		</div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Material</label>
            <input type="text" class="form-control" name="material"/>
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label>Preço Unitário</label>
            <input type="text" class="form-control" name="punitario"/>
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
    <br/>
    <?php include './material-tabela.php';?>

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

    </script>
</body>
</html>
