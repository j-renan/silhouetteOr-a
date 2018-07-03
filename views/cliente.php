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
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Clientes <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Orçamentos</a></li>
          </ul>
        </div>
      </div>
  </nav>

  <div class="container">
  <form action="">
  <!--linha um id, nome-->
    <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>ID</label>
            <imput type="text" class="form-control" name="id" readonly/> 
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome"/>
          </div>
        </div>
    </div>

    <!--linha um id, nome-->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9"></div>
    </div>

    <!--linha um id, nome-->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9"></div>
    </div>

    <!--linha um id, nome-->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9"></div>
    </div>
    </form>
  
  
  
  </div>




    <!--incluindo arquivos necessarios para a biblioteca-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>
