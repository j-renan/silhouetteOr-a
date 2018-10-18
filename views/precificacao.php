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
<?php

include './header.php';
include "../controller/buscarDadosPrecificacao.php";
?>

<div class="container">
    <h1>Precificação de Produtos</h1>
    <hr/>
    <br/>
    <form action="">
        <!--linha um nome, preço unitario-->

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label>Cliente</label>
                    <select class="form-control" id="selectCliente">
                        <?php
                        for ($i = 0; $i < count($listaClientes); $i++) {
                            $linha = $listaClientes[$i];
                            echo '<option value="' . $linha["nome"] . '">' . $linha["nome"] . '</option>';
                        }
                        ?>

                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Produto a Precificar</label>
                    <select class="form-control" id="selectProduto">
                        <?php
                        for ($i = 0; $i < count($listaProdutos); $i++) {
                            $linha = $listaProdutos[$i];
                            echo '<option value="' . $linha["preco"] . '">' . $linha["produto"] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Materiais a Utilizar</label>
                    <select class="form-control" id="selectMaterial" onchange="setarPreco()">
                        <?php
                        for ($i = 0; $i < count($listaMateriais); $i++) {
                            $linha = $listaMateriais[$i];
                            echo '<option value="' . $linha["material"] . '">' . $linha["material"] . '</option>';
                        }
                        ?>

                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label>Preço unitário R$</label>
                    <input type="text" class="form-control" name="preco" id="preco" />
                </div>
            </div>


            <div class="col-md-1">
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="qtde" id="qtde"/>
                </div>
            </div>
        </div>

        <!--adicionando botoes-->
        <div class="row">
            <div class="col-md-2">
                <a href="#"  class="btn btn-primary" onclick="adicionarDados()">
                    CALCULAR PRODUTO <span class="glyphicon glyphicon-usd"></span>
                </a>
            </div>
        </div>
    </form>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-condensed table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <td>CLIENTE</td>
                    <td>PRODUTO</td>
                    <td>MATERIAL</td>
                    <td>PREÇO</td>
                    <td>QUANTIDADE</td>
                    <td>TOTAL</td>
                    <td>EXCLUIR</td>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>


    <!--incluindo arquivos necessarios para a biblioteca-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>    

    <script>
        const listaMateriais = <?php echo $listaMateriaisJS ?>;
        const precoInput = document.getElementById("preco");        
        precoInput.value = listaMateriais[0].preco   

        function setarPreco() {
            const selectMaterial = document.getElementById("selectMaterial");
            precoInput.value = selectMaterial.value
        }
        function adicionarDados() {
            const selectCliente = document.getElementById("selectCliente").value;
            const selectProduto = document.getElementById("selectProduto").value;
            const selectMaterial = document.getElementById("selectMaterial").value;
            const preco = document.getElementById("preco").value;
            const qtde = document.getElementById("qtde").value;
            console.log(selectCliente, selectProduto, selectMaterial, preco, qtde)
        }
    </script>
</body>
</html>
