<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 14/01/2019
 * Time: 20:25
 */

include "../assets/pdf/fpdf.php";
include "../dao/OrcamentoDAO.php";
$id = 50;

$orcamentoDAO = new OrcamentoDAO();
$resultados = $orcamentoDAO->buscarDadosOrcamentoRelatorio($id);
$numeroLinhas = $resultados->num_rows;
$dados = [];

$orcamentoID = 0;
$nomeCliente = "";
$data = "";

for ($i=0; $i < $numeroLinhas; $i++) {
    $linha = $resultados->fetch_assoc();

    if ($i == 0) {
        $orcamentoID = $linha["id"];
        $nomeCliente = $linha["nome"];
        $data = $linha["data"];
    }
    //print_r($linha);
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image("../assets/img/logo-relatorio.png");
$pdf->Ln(10);

$stringOrcamento = "Orçamento: ".$orcamentoID;
$pdf->SetFont("Arial","B", 16);
$pdf->Cell(30,10,$stringOrcamento);
$pdf->Ln(10);

$stringCliente = "Cliente: ".$nomeCliente;
$pdf->Cell(30,10,$stringCliente);
$pdf->Ln(10);

$stringData = "Data: ".$data;
$pdf->Cell(30,10,$stringData);
$pdf->Ln(10);

$dados = [
  [
      "produto" => "Caixa Milk", "qtde" => "10", "valor" => 12.99, "total" => 99.99
  ],
    [
        "produto" => "Caixa Milk", "qtde" => "10", "valor" => 12.99, "total" => 99.99
    ]
];

$total = 0.0;
for($i=0; $i < count($dados); $i++){
    $linha = $dados[$i];
    if ($i==0){
        $pdf->Cell(60,10,"Produto", 1);
        $pdf->Cell(40,10,"Quantidade", 1);
        $pdf->Cell(40,10,"Valor", 1);
        $pdf->Cell(40,10,"Total", 1);

        $pdf->Ln(10);
        $pdf->Cell(60,10,$linha["produto"],1);
        $pdf->Cell(40,10,$linha["qtde"],1);
        $pdf->Cell(40,10,$linha["valor"],1);
        $pdf->Cell(40,10,$linha["total"],1);
        $pdf->Ln(10);
    } else {
        $pdf->Cell(60,10,$linha["produto"],1);
        $pdf->Cell(40,10,$linha["qtde"],1);
        $pdf->Cell(40,10,$linha["valor"],1);
        $pdf->Cell(40,10,$linha["total"],1);
        $pdf->Ln(10);
    }
    $total = $total + $linha["total"];
    //$total += $linha["total"];
}

$strinTotal = "R$ ". $total;
$pdf->Cell(170,10,$strinTotal,0, "", "R");

$pdf->Ln(10);
$pdf->Ln(10);
$pdf->Cell(170,10,"Orçamento válido por 30 dias.",0);

$pdf->Ln(10);
$pdf->Ln(10);
$pdf->MultiCell(170,10,"Metade do valor deverá ser pago após confirmação 
do pedido e outra metade no ato da entrega dos produtos. ",0 );

$pdf->Output();
