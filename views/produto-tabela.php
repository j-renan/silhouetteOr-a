<?php include '../controller/produto-lista.php'; ?>

<!-- tabela de produtos -->
<div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-bordered table-hover table-condensed">
          <!-- cabecalho da tabela -->
          <thead>
            <tr>            
              <th>ID</th>
              <th>Produto</th>
              <th>Ativo</th>
              <th>Editar</th>
              <th>Excluir</th>
            </tr>
          </thead>          

          <!-- corpo da tabela -->
          <tbody>
            <?php               
              for ($i=0; $i < count($listaProdutos); $i++) {

                $linha = $listaProdutos[$i];                

                $ativo;
                if ($linha["ativo"] == 1) {
                  $ativo = "Sim";
                } else if ($linha["ativo"] == 0) {
                  $ativo = "Não";
                }

                //$ativo = ($linha["ativo"] == 1) ? "Sim" : "Não";

                echo "<tr>
                  <td> ". $linha["id"] ." </td>
                  <td> ". $linha["produto"] ." </td>
                  <td> ". $ativo ." </td>
				  
				  <td width=\"100px\">
					<button class=\"btn btn-success\" onclick=\"setProdutoEditar(".$linha['id'].", '".$linha['produto']."')\">
						<span class=\"glyphicon glyphicon-pencil\"></span>
					</button>
				  </td>
				  
				  <td width=\"100px\">
					<button class=\"btn btn-danger\">
						<span class=\"glyphicon glyphicon-remove\"></span>
					</button>
				  </td>
				  
                </tr>";
              }                            
            ?>
            
          </tbody>
        </table>
      </div>    
    </div>
	<!-- codigo javascript -->
	<script>
	
		function setProdutoEditar(id, produto) {			
			var campoProduto = document.getElementById("produto");					
			campoProduto.value = produto;
		}					
		
	</script>