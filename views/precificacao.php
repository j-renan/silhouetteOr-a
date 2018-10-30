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
                            echo '<option value="' . $linha["produto"] . '">' . $linha["produto"] . '</option>';
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
                            $materialPreco = $linha["material"]."|".$linha["preco"];
                            echo '<option value="' . $materialPreco . '">' . $linha["material"] . '</option>';
                        }
                        ?>

                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label>Preço custo R$</label>
                    <input type="text" class="form-control" name="preco" id="preco" />
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label>Preço venda R$</label>
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
            <table id="tabela" class="table table-condensed table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <td>CLIENTE</td>
                    <td>PRODUTO</td>
                    <td>MATERIAL</td>
                    <td>PREÇO CUSTO</td>
                    <td>PREÇO VENDA</td>
                    <td>QUANTIDADE</td>
                    <td>TOTAL CUSTO</td>
                    <td>TOTAL VENDA</td>
                    <td>LUCRO</td>
                    <td>EXCLUIR</td>
                </tr>
                </thead>
                <tbody id="corpo">

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
            const dados = selectMaterial.value.split("|")
            precoInput.value = dados[1]
        }

        function adicionarDados() {
            const selectCliente = document.getElementById("selectCliente").value;
            const selectProduto = document.getElementById("selectProduto").value;
            const selectMaterial = document.getElementById("selectMaterial").value;
            const preco = document.getElementById("preco").value;
            const qtde = document.getElementById("qtde").value;

            const nomeMaterial = selectMaterial.split("|")[0]

            criarLinha(selectCliente, selectProduto, nomeMaterial, preco, qtde)
        }

        function criarLinha(cliente, produto, material, preco, quantidade) {

            const corpo = document.getElementById("corpo")
            const linha = document.createElement("tr")

            const colCliente = document.createElement("td")
            const colProduto = document.createElement("td")
            const colMaterial = document.createElement("td")
            const colPreco = document.createElement("td")
            const colQuantidade = document.createElement("td")

            const cli = document.createTextNode(cliente)
            const pro = document.createTextNode(produto)
            const mat = document.createTextNode(material)
            const pre = document.createTextNode(preco)
            const qua = document.createTextNode(quantidade)

            colCliente.appendChild(cli)
            colProduto.appendChild(pro)
            colMaterial.appendChild(mat)
            colPreco.appendChild(pre)
            colQuantidade.appendChild(qua)

            linha.appendChild(colCliente)
            linha.appendChild(colProduto)
            linha.appendChild(colMaterial)
            linha.appendChild(colPreco)
            linha.appendChild(colQuantidade)


            corpo.appendChild(linha)
        }
    </script>
</body>
</html>
