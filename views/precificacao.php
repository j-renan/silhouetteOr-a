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
include "../controller/buscarDados.php";

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
                    <select class="form-control">
                        <?php
                            for ($i=0; $i < count($listaClientes); $i++){
                                $linha = $listaClientes[$i];
                                echo '<option value="'.$linha["id"].'">'.$linha["nome"].'</option>';
                            }
                        ?>

                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label>Produto a Precificar</label>
                    <select class="form-control">
                        <?php
                        for ($i=0; $i < count($listaProdutos); $i++){
                            $linha = $listaProdutos[$i];
                            echo '<option value="'.$linha["id"].'">'.$linha["produto"].'</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label>Materiais a Utilizar</label>
                    <select class="form-control">
                        <option>Selecione o Material</option>
                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label>Preço unitário R$</label>
                    <input type="text" class="form-control" name="id"/>
                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="id"/>
                </div>
            </div>
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
