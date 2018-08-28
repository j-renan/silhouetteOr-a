<?php include '../controller/cliente-lista.php'?>

<!-- tabela de clientes -->
<div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-bordered table-hover table-condensed">
          <!-- cabecalho da tabela -->
          <thead>
            <tr>            
              <th>ID</th>
              <th>Nome</th>
              <th>Endereço</th>
              <th>CEP</th>
              <th>CPF</th>
              <th>Telefone</th>
              <th>Cidade</th>
              <th>E-mail</th>
              <th>Data Nascimento</th>
              <th>Editar</th>
              <th>Excluir</th>
            </tr>
          </thead>

          <!-- corpo da tabela -->
          <tbody>
            <?php               
              for ($i=0; $i < count($listaClientes); $i++) {

                $linha = $listaClientes[$i];         				
                
                echo "<tr>
                  <td> ". $linha["id"] ." </td>
                  <td> ". $linha["nome"] ." </td>
                  <td> ". $linha["endereco"] ." </td>
                  <td> ". $linha["cep"] ." </td>
                  <td> ". $linha["cpf"] ." </td>
                  <td> ". $linha["telefone"] ." </td>
                  <td> ". $linha["cidade"] ." </td>
                  <td> ". $linha["email"] ." </td>
                  <td> ". $linha["data_nascimento"] ." </td>
                  
                  <td width=\"100px\">
          <button class=\"btn btn-success\" onclick=\"setClienteEditar(".$linha['id'].", '".$linha['nome']."','".$linha['endereco']."',
          '".$linha['cep']."','".$linha['cpf']."','".$linha['telefone']."','".$linha['cidade']."','".$linha['email']."','".$linha['data_nascimento']."')\">
						<span class=\"glyphicon glyphicon-pencil\"></span>
					</button>
				  </td>
				  
				  <td width=\"100px\">
					<button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#janelaExcluirMaterial\" 
						onclick=\"excluirMaterial(".$linha['id'].", '".$linha['nome']."','".$linha['endereco']."',
            '".$linha['cep']."','".$linha['cpf']."','".$linha['telefone']."','".$linha['cidade']."','".$linha['email']."','".$linha['data_nascimento']."')\">
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
	
  function setClienteEditar(id, nome, endereco, cep, cpf, telefone, cidade, email, data_nascimento) {			
    var campoClienteId = document.getElementById("clienteId");
    campoClienteId.value = id;
    
    var campoNome = document.getElementById("nome");
    campoNome.value = nome;

    var campoEndereco = document.getElementById("endereco");
    campoEndereco.value = endereco;

    var campoCep = document.getElementById("cep");
    campoCep.value = cep;

    var campoCpf = document.getElementByID("cpf");
    campoCpf.value = cpf;

    var campoTelefone = document.getElementById("telefone");
    campoTelefone.value = telefone;

    var campoCidade = document.getElementById("cidade");
    campoCidade.value = cidade;

    var campoEmail = document.getElemetById("email");
    campoEmail.value = email;

    var campoDataNascimento = document.getElementById("data_nascimento");
    campoDataNascimento.value = data_nascimento;    
       
  }					
  
  function excluirCliente(id, nome, endereco, cep, cpf, telefone, cidade, email, data_nascimento) {
    // monta a mensagem para exibir na janela modal
    var paragrafoExcluir = document.getElementById("mensagemExcluirCliente");
    var mensagem = "Deseja excluir cliente " + nome + " ?";
    paragrafoExcluir.textContent = mensagem;
    
    // pegando referencia do excluir cliente e setando o id do cliente a ser excluido
    var hiddenExcluirCliente = document.getElementById("excluirCliente");
    hiddenExcluirCliente.value = 1;
    
    var campoClienteId = document.getElementById("clienteId");	
    campoClienteId.value = id;
    
    
  }

  function excluirClienteConfirmar(){
    var formCliente = document.getElementById("formCliente");
    formCliente.submit();
    
  }
  
</script>