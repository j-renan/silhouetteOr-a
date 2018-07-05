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
        <?php $paginaLink = basename($_SERVER['SCRIPT_NAME']);?>
          <ul class="nav navbar-nav">
            <li class="active"><a <?php if($paginaLink == "./cliente.php") {echo 'class="link active"';}else{echo 'class="link"';} ?> href="#">Clientes<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="#">Produtos</a></li>
            <li><a href="#">Orçamentos<span class="sr-only">(current)</span></a></li>
            <li class="active"><a <?php if($paginaLink == "./material.php") {echo 'class="link active"';}else{echo 'class="link"';} ?> href="#">Materiais<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Precificação<span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
      </div>
  </nav>
