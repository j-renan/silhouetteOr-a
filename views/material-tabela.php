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
                  <td> ". $linha["preco"] ." </td>
				  
				  <td width=\"100px\">
					<button class=\"btn btn-success\" onclick=\"setMaterialEditar(".$linha['id'].", '".$linha['material']."','".$linha['preco']."')\">
						<span class=\"glyphicon glyphicon-pencil\"></span>
					</button>
				  </td>
				  
				  <td width=\"100px\">
					<button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#janelaExcluirMaterial\" 
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
			var campoMaterialId = document.getElementById("materialId");
			campoMaterialId.value = id;
			
			var campoMaterial = document.getElementById("material");
			campoMaterial.value = material;
			
			//passando valor de referencia com uma linha só
			document.getElementById("preco").value = preco;
     
		}					
		
		function excluirMaterial(id, material) {
			// monta a mensagem para exibir na janela modal
			var paragrafoExcluir = document.getElementById("mensagemExcluirMaterial");
			var mensagem = "Deseja excluir material " + material + " ?";
			paragrafoExcluir.textContent = mensagem;
			
			// pegando referencia do excluir produto e setando o id do produto a ser excluido
			var hiddenExcluirMaterial = document.getElementById("excluirMaterial");
			hiddenExcluirMaterial.value = 1;
			
			var campoMaterialId = document.getElementById("materialId");	
			campoMaterialId.value = id;
			
			
		}

    function excluirMaterialConfirmar(){
      var formMaterial = document.getElementById("formMaterial");
			formMaterial.submit();
			
    }
		
	</script>