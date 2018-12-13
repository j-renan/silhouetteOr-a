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
                            echo '<option value="' . $linha["id"] . '">' . $linha["nome"] . '</option>';
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
                            echo '<option value="' . $linha["id"] . '">' . $linha["produto"] . '</option>';
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
                            $materialPreco = $linha["material"] . "|" . $linha["preco"] . "|" . $linha["id"];
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
                                <h4>Valor Total dos Produtos <span id="produto"></span> = R$ <span id="total"></span></h4>
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>% Lucro</label>
                                    <input type="number" id="lucro" name="lucro" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Total</label>
                                    <input type="number" id="totalQtde" name="total" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" onclick="calcular()" style="float: left">
                        CALCULAR <span class="glyphicon glyphicon-ok"></span>
                    </a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" onclick="salvarDados()">Enviar Para Orçamento
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
                    <td>QTDE</td>
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
    <script src="../assets/js/precificacao.js"></script>
    <script src="../assets/js/salvarPrecificacao.js"></script>


    <script>
        const listaMateriaisPhp = <?php echo $listaMateriaisJS ?>;
        setListaMateriais(listaMateriaisPhp)
    </script>
</body>
</html>
