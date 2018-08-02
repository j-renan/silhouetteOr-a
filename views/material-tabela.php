<?php include '../controller/material-lista.php'; ?>

<!-- tabela de materiais -->
<div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-bordered table-hover table-condensed">
          <!-- cabecalho da tabela -->
          <thead>
            <tr>            
              <th>ID</th>
              <th>Material</th>
              <th>Preço</th>
              <th>Editar</th>
              <th>Excluir</th>
            </tr>
          </thead>          

          <!-- corpo da tabela -->
          <tbody>
            <?php               
              for ($i=0; $i < count($listaMateriais); $i++) {

                $linha = $listaMateriais[$i];         
            
                
                echo "<tr>
                  <td> ". $linha["id"] ." </td>
                  <td> ". $linha["material"] ." </td>
                  <td> ". $preco["preco"] ." </td>
				  
				  <td width=\"100px\">
					<button class=\"btn btn-success\" onclick=\"setMaterialEditar(".$linha['id'].", '".$linha['material'].",'".$linha['preco']."')\">
						<span class=\"glyphicon glyphicon-pencil\"></span>
					</button>
				  </td>
				  
				  <td width=\"100px\">
					<button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#janelaExcluirProduto\" 
						onclick=\"excluirMaterial(".$linha['id'].", '".$linha['material']."')\">
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
	
		function setMaterialEditar(id, material, preco) {			
			//var campoProdutoId = document.getElementById("produtoId");	
			//campoProdutoId.value = id;
			
			//var campoProduto = document.getElementById("produto");					
			//campoProduto.value = produto;
     
		}					
		
		function excluirMaterial(id, material) {
			// monta a mensagem para exibir na janela modal
			//var paragrafoExcluir = document.getElementById("mensagemExcluirProduto");
			//var mensagem = "Deseja excluir produto " + produto + " ?";
			//paragrafoExcluir.textContent = mensagem;
			
			// pegando referencia do excluir produto e setando o id do produto a ser excluido
			//var hiddenExcluirProduto = document.getElementById("excluirProduto");
			//hiddenExcluirProduto.value = 1;
			
			//var campoProdutoId = document.getElementById("produtoId");	
			//campoProdutoId.value = id;
			
			
		}

    function excluirMaterialConfirmar(){
      //var formProduto = document.getElementById("formProduto");
			//formProduto.submit();
			
    }
		
	</script>