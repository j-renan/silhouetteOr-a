function salvarDados() {
    salvarOrcamento()
}

// salvar dados na tabela orcamento
function salvarOrcamento() {
    const data= document.getElementById("data").value
    const crianca= document.getElementById("crianca").value
    const clienteId= document.getElementById("selectCliente").value

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
    }).then(resposta => {
        resposta.json().then(id=>salvarProdutoOrcamento(id))
    }).catch(erro => {
        console.log(erro)
    })
}

function salvarProdutoOrcamento(id){
    const produtoId= document.getElementById("selectProduto").value
    const precoUnitario= document.getElementById("preco").value
    const qtde= document.getElementById("qtde").value
    const percentual= document.getElementById("lucro").value
    const total= document.getElementById("totalQtde").value

    const  url = "../controller/produtoOrcamento-ctrl.php"
    const dados = {
        produtoId, precoUnitario, qtde, percentual, total,
        orcamentoId: id
    }

    fetch(url, {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        method: "POST",
        body: JSON.stringify(dados)
    }).then(() => salvarMaterialOrcamento()
    ).catch(erro => console.log(erro))

}

function salvarMaterialOrcamento() {
    let listaMateriaisSalvar = []

    listaMateriaisAdicionados.map(material => {
        if (material.ativo == true) {
            listaMateriaisSalvar.push(material)
        }
    })

    const  url = "../controller/materialOrcamento-ctrl.php"

    fetch(url, {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        method: "POST",
        body: JSON.stringify(listaMateriaisSalvar)
    }).then(() => console.log('salvou tudo...')
    ).catch(erro => console.log(erro))
}







// salvar dados na tabela produtos orçamento

// salvar dados na tabela material orçamento