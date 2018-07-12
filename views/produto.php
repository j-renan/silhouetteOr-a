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
  <?php include './header.php';?>

<div class="container">
  <h1>Cadastro de Produto</h1>
  <hr/>
  <br/>
  <form action="../controller/produto-ctrl.php" method="post">
  <!--linha um nome, preço unitario-->
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Pruduto</label>
            <input type="text" class="form-control" name="produto" required/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="checkbox">
            </br>
            <label>
              <input type="checkbox" name="ativo" value="true" checked> Ativo
            </label>
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
    
    </body>
</html>
