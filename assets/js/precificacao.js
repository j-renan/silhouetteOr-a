
let listaMateriais = []
const precoInput = document.getElementById("preco");
let indice = 1
let valorUnitarioTotal = 0
const listaMateriaisAdicionados = []
const btnEnviarOrcamento = document.getElementById("btnEnviarOrcamento")

//qdo envia para orçamento culcula total dos produtos ativos
document.getElementById("btnEnviarOrcamento").addEventListener('click',function () {

    valorUnitarioTotal = 0
    listaMateriaisAdicionados.map(function (linha) {
        if (linha.ativo === true){
            valorUnitarioTotal = valorUnitarioTotal + linha.preco
        }
    })
    const spanTotal=document.getElementById("total")
    spanTotal.textContent = parseFloat(valorUnitarioTotal).toFixed(2)

})

function setListaMateriais(lista) {
    listaMateriais = lista
    precoInput.value = listaMateriais[0].preco
}

function setarPreco() {
    const selectMaterial = document.getElementById("selectMaterial");
    const dados = selectMaterial.value.split("|")
    precoInput.value = dados[1]
}

function adicionarDados() {
    const selectProduto = document.getElementById("selectProduto");
    const produtoNome = selectProduto.options[selectProduto.selectedIndex].textContent
    const produtoId = document.getElementById("selectProduto").value
    const selectMaterial = document.getElementById("selectMaterial").value;
    const preco = document.getElementById("preco").value;
    const nomeMaterial = selectMaterial.split("|")[0]
    const materialId = selectMaterial.split("|")[2]

    criarLinha(produtoNome, nomeMaterial, preco, materialId, produtoId)
}

function criarLinha(produto, material, preco, materialId, produtoId) {

    const corpo = document.getElementById("corpo")
    const linha = document.createElement("tr")

    const colProduto = document.createElement("td")
    const colMaterial = document.createElement("td")
    const colPreco = document.createElement("td")
    const colApagar = document.createElement("td")

    const pro = document.createTextNode(produto)
    const mat = document.createTextNode(material)
    const pre = document.createTextNode(preco)
    const botaoRemover = criarBotao(indice)

    colProduto.appendChild(pro)
    colMaterial.appendChild(mat)
    colPreco.appendChild(pre)
    colApagar.appendChild(botaoRemover)


    linha.appendChild(colProduto)
    linha.appendChild(colMaterial)
    linha.appendChild(colPreco)
    linha.appendChild(colApagar)

    corpo.appendChild(linha)
    indice++

    // monta o obj que será salvo no banco de dados
    const obj = {
        produto: produto,
        produtoId: produtoId,
        material: material,
        materialId: materialId,
        preco: parseFloat(preco),
        ativo: true
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




    const spanProduto=document.getElementById("produto")
    spanProduto.textContent = produto
}

function criarBotao(indice) {
    const botao = document.createElement("button")
    const textoBotao = document.createTextNode("Apagar")
    botao.setAttribute("id","botaoRemover")
    botao.classList.add("btn")
    botao.classList.add("btn-danger")

    botao.onclick = function () {
        const linhaRemover = document.getElementsByTagName("tr")[indice]
        linhaRemover.style.display = "none"
        removerItemArray(indice)
    }
    botao.appendChild(textoBotao)
    return botao

}

function calcular() {
    const qtde = document.getElementById("qtde").value
    const lucro = document.getElementById("lucro").value
    const total = (Number(qtde) * valorUnitarioTotal)
    let porcentagem = total * (lucro/100)

    porcentagem = porcentagem + total

    document.getElementById("totalQtde").value = parseFloat(porcentagem).toFixed(2)

}

function removerItemArray(indice) {

    let produtoAtivo = false
    for (let i = 0; i < listaMateriaisAdicionados.length; i++){
        const linha = listaMateriaisAdicionados[i]
        if ((indice - 1) === i){
            linha.ativo = false
        }
        if (linha.ativo === true){
            produtoAtivo = true
        }
    }

    if (produtoAtivo === true) {
        btnEnviarOrcamento.style.display = 'inline-block'
    }else {
        btnEnviarOrcamento.style.display = 'none'
    }

}