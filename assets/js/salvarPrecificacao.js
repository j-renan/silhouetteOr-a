function salvarDados() {
    salvarOrcamento()
    salvarProdutoOrcamento()

}
// salvar dados na tabela orcamento
function salvarOrcamento() {
    const data= document.getElementById("data").value
    const crianca= document.getElementById("crianca").value
    const clienteId= document.getElementById("selectCliente").value
console.log(data,crianca,clienteId)
    const  url = "../controller/orcamento-ctrl.php"
    const dados = {
        data: data,
        crianca: crianca,
        clienteId: clienteId,
    }
    fetch(url, {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        method: "POST",
        body: JSON.stringify(dados)
    }).then()

    /**
     * fetch("/echo/json/",
     {
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
    method: "POST",
    body: JSON.stringify({a: 1, b: 2})
})
     .then(function(res){ console.log(res) })
     */
    //enviar para salvar
}

function salvarProdutoOrcamento(){
    const produtoId= document.getElementById("selectProduto").value
    const precoUnitario= document.getElementById("preco").value
    const qtde= document.getElementById("qtde").value
    const percentual= document.getElementById("lucro").value
    const total= document.getElementById("totalQtde").value

    console.log(produtoId, precoUnitario, qtde, percentual, total)
}







// salvar dados na tabela produtos orçamento

// salvar dados na tabela material orçamento