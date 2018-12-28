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

    const total= document.getElementById("totalQtde").value
    const percentual= document.getElementById("lucro").value

    listaMateriaisAdicionados.map(item => {
        item.orcamentoId = id
        item.total = total
        item.percentual = percentual
    })

    const  url = "../controller/produtoOrcamento-ctrl.php"

    fetch(url, {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        method: "POST",
        body: JSON.stringify(listaMateriaisAdicionados)
    }).then(() => salvarMaterialOrcamento()
    ).catch(erro => console.log(erro))

}

function salvarMaterialOrcamento() {
    let listaMateriaisSalvar = []

    listaMateriaisAdicionados.map(item => {
        item.materiais.map(material => {
            listaMateriaisSalvar.push(material)
        })
    })
    console.log(listaMateriaisSalvar)
    const  url = "../controller/materialOrcamento-ctrl.php"

    fetch(url, {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        method: "POST",
        body: JSON.stringify(listaMateriaisSalvar)
    }).then(() => location.reload()
    ).catch(erro => console.log(erro))
}

/*
gerar consulta para pagina orçamentos
popular tabela com os dados
gerar relatorio para cliente
gerar relatorio para vendedor

 */




