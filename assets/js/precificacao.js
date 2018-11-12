let totalSoma = 0
let listaMateriais = []
const precoInput = document.getElementById("preco");
let indice = 1


function setListaMateriais(lista) {
    listaMateriais = lista
    precoInput.value = listaMateriais[0].preco
}


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
        console.log(linha)
        totalValorUnitarioProduto = totalValorUnitarioProduto + linha.preco
        //totalValorUnitarioProduto += linha.preco
    }
    totalSoma = totalValorUnitarioProduto

    const spanTotal=document.getElementById("total")
    spanTotal.textContent = parseFloat(totalValorUnitarioProduto).toFixed(2)

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

    }
    botao.appendChild(textoBotao)
    return botao

}

function calcular() {
    const qtde = document.getElementById("qtde").value
    const total = Number(qtde) * totalSoma
    document.getElementById("totalQtde").value = total
    console.log(total)

}