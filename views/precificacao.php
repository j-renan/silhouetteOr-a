<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Silhouette Orça Precificação</title>
    <!--incluindo arquivo css-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!--barra de navegação-->
  <?php include './header.php';?>

<div class="container">
  <h1>Precificação de Produtos</h1>
  <hr/>
  <br/>
  <form action="">
  <!--linha um nome, preço unitario-->
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Selecione Produto</label>                
            <input type="text" class="form-control" name="sel-produto"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Materiais a Utilizar</label>
            <input type="text" class="form-control" name="mat-utilizar"/>
          </div>
        </div>
    </div>

    

    <!--adicionando botoes-->
    <div class="row">
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary">
          ENVIAR PARA ORÇAMENTO <span class="glyphicon glyphicon-plus-sign"></span>
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

    </script>
</body>
</html>
