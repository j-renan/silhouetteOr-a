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
                    <label>Data</label>
                    <input type="date" class="form-control" name="data" id="data" value="<?php echo date('Y-m-d') ?>"/>
                </div>
            </div>
            <div class="col-md-3">
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
                    <label>Criança</label>
                    <input type="text" class="form-control" id="crianca" name="crianca">
                </div>
            </div>
        </div>

        <div class="row">
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
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Materiais a Utilizar</label>
                    <select class="form-control" id="selectMaterial" onchange="setarPreco()">
                        <?php
                        for ($i = 0; $i < count($listaMateriais); $i++) {
                            $linha = $listaMateriais[$i];
                            $materialPreco = $linha["material"] . "|" . $linha["preco"];
                            echo '<option value="' . $materialPreco . '">' . $linha["material"] . '</option>';
                        }
                        ?>

                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label>Preço Unitário R$</label>
                    <input type="text" class="form-control" name="preco" id="preco"/>
                </div>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-primary" onclick="adicionarDados()" style="margin-top: 24px">
                    ADICIONAR MATERIAL <span class="glyphicon glyphicon-ok"></span>
                </a>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#janelaEnviarOrcamento"
                   style="margin-top: 24px; margin-left: 28px; display: none;" id="btnEnviarOrcamento">
                    ENVIAR PARA ORÇAMENTO <span class="glyphicon glyphicon-ok"></span>
                </a>
            </div>
        </div>
    </form>

    <!-- janela de confirmação para enviar para orçamento -->
    <div class="modal fade" id="janelaEnviarOrcamento" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Enviar Produto Para Orçamento</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Total da Unidade do Produto <span id="produto"></span> = R$ <span id="total"></span></h4>
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Quantidade</label>
                                    <input type="number" id="qtde" name="qtde" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Total</label>
                                    <input type="number" id="total" name="total" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn btn-primary" onclick="calcular()"
                                   style="margin-top: 24px; margin-left: 28px;">
                                    CALCULAR <span class="glyphicon glyphicon-ok"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" id="removerMaterial"
                            onclick="">Enviar Para Orçamento
                    </button>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table id="tabela" class="table table-condensed table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <td>PRODUTO</td>
                    <td>MATERIAL</td>
                    <td>PREÇO UNITÁRIO</td>
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

        const listaMateriaisAdicionados = []
        const btnEnviarOrcamento = document.getElementById("btnEnviarOrcamento")

        function setarPreco() {
            const selectMaterial = document.getElementById("selectMaterial");
            const dados = selectMaterial.value.split("|")
            precoInput.value = dados[1]
        }

        function adicionarDados() {
            const selectProduto = document.getElementById("selectProduto").value;
            const selectMaterial = document.getElementById("selectMaterial").value;
            const preco = document.getElementById("preco").value;
            const nomeMaterial = selectMaterial.split("|")[0]

            criarLinha(selectProduto, nomeMaterial, preco)
        }

        function criarLinha(produto, material, preco) {

            const corpo = document.getElementById("corpo")
            const linha = document.createElement("tr")

            const colProduto = document.createElement("td")
            const colMaterial = document.createElement("td")
            const colPreco = document.createElement("td")

            const pro = document.createTextNode(produto)
            const mat = document.createTextNode(material)
            const pre = document.createTextNode(preco)

            colProduto.appendChild(pro)
            colMaterial.appendChild(mat)
            colPreco.appendChild(pre)

            linha.appendChild(colProduto)
            linha.appendChild(colMaterial)
            linha.appendChild(colPreco)

            corpo.appendChild(linha)

            // monta o obj que será salvo no banco de dados
            const obj = {
                produto: produto,
                material: material,
                preco: parseFloat(preco)
            }

            listaMateriaisAdicionados.push(obj)

            if (listaMateriaisAdicionados.length > 0) {
                btnEnviarOrcamento.style.display = 'inline-block'
            }

            let totalValorUnitarioProduto = 0
            for(let i=0; i < listaMateriaisAdicionados.length; i++) {
                const linha = listaMateriaisAdicionados[i]
                totalValorUnitarioProduto = totalValorUnitarioProduto + linha.preco
                //totalValorUnitarioProduto += linha.preco
            }

            const spanTotal=document.getElementById("total")
            spanTotal.textContent = totalValorUnitarioProduto

            const spanProduto=document.getElementById("produto")
            spanProduto.textContent = produto
        }
    </script>
</body>
</html>
