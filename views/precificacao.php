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
      <h3>Produto a Precificar</h3> 
      <br/>
      <select class="form-control">
        <option>Selecione o Produto</option>
      </select>
    </div>
  </div>  

</div>

  <br/>
  
<div class="row">

  <div class="col-md-6">
    <div class="form-group">
      <h3>Materiais a Utilizar</h3>
      <br/>
      <label>Material</label>
      <select class="form-control">
        <option>Selecione o Material</option>
      </select>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <br/>
      <br/>
      <br/>
      <br/>
      <label>Preço unitário R$</label>
        <input type="text" class="form-control" name="id" readonly/>
    </div>
  </div>

  <div class="col-md-2">
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>              
    <button type="button" class="btn btn-info" onclick="duplicarCampos();">
      <span class="glyphicon glyphicon-plus-sign"></span>
    </button>
  </div> 

</div>



<script>
    function duplicarCampos(){
	var clone = document.getElementById('origem').cloneNode(true);
	var destino = document.getElementById('destino');
	destino.appendChild (clone);
	var camposClonados = clone.getElementsByTagName('input');
	for(i=0; i<camposClonados.length;i++){
		camposClonados[i].value = '';
	}
}
function removerCampos(id){
	var node1 = document.getElementById('destino');
	node1.removeChild(node1.childNodes[0]);
}
</script>


<script>
  function mostrar(){
    document.getElementById('origem').style.visibility = 'hidden';
    }
  function ocultar(){
    var ocultar = document.getElementById('origem').style.visibility = 'visible';
    for(i=0; i<ocultar.length;i++){
		ocultar[i].value = '';
	}
    }
</script>


<div class="row" id="origem" style="display:none">
  <div class="col-md-6">
    <div class="form-group">
      <h3>Materiais a Utilizar</h3>
      <br/>
      <label>Material</label>
      <select class="form-control">
        <option>Selecione o Material</option>
      </select>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <br/>
      <br/>
      <br/>
      <br/>
      <label>Preço unitário R$</label>
        <input type="text" class="form-control" name="id" readonly/>
    </div>
  </div>

  <div class="col-md-2">
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>              
    <button type="button" class="btn btn-info" onclick="duplicarCampos();">
      <span class="glyphicon glyphicon-plus-sign"></span>
    </button>
  </div> 
</div>

<div id="destino">
</div>




    

    <!--adicionando botoes-->
    <div class="row">
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary">
          CALCULAR PRODUTO <span class="glyphicon glyphicon-usd"></span>
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
