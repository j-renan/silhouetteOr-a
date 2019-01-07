<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Silhouette Orça Clientes</title>
    <!--incluindo arquivo css-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!--barra de navegação-->
<?php
include './header.php';
include '../controller/orcamento-lista.php';
?>

<div class="container">
    <h1>Orçamentos</h1>
    <hr/>
    <br/>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <!-- cabecalho da tabela -->
                <thead>
                <tr>
                    <th>Data</th>
                    <th>Cliente</th>
                    <th>Criança</th>
                    <th>Produto</th>
                    <th>Total</th>
                    <th>Ações</th>
                </tr>
                </thead>

                <!-- corpo da tabela -->
                <tbody>
                <?php
                    for ($i=0; $i < count($listaOrcamentos); $i++) {
                        $linha = $listaOrcamentos[$i];

                        echo "<tr>
                          <td> ". $linha["data"] ." </td>
                          <td> ". $linha["nome"] ." </td>
                          <td> ". $linha["crianca"] ." </td>
                          <td> ". $linha["produto"] ." </td>
                          <td> ". $linha["total"] ." </td>
                          <td></td>
                        </tr>";
                    }
                ?>
                </tbody>
            </table>

        </div>

        <!--incluindo arquivos necessarios para a biblioteca-->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>
