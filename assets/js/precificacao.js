
let listaMateriais = []
const precoInput = document.getElementById("preco");
let valorUnitarioTotal = 0
const listaMateriaisAdicionados = []
const btnEnviarOrcamento = document.getElementById("btnEnviarOrcamento")

//qdo envia para orçamento culcula total dos produtos ativos
document.getElementById("btnEnviarOrcamento").addEventListener('click',function () {

    valorUnitarioTotal = 0
    listaMateriaisAdicionados.map(function (linha) {
        const valorTotalProduto = linha.preco * linha.qtde
            valorUnitarioTotal = valorUnitarioTotal + valorTotalProduto
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

    verificarProdutoTabela(produtoNome, nomeMaterial, preco, materialId, produtoId)

    }

function verificarProdutoTabela(produto, material, preco, materialId, produtoId) {

    // monta o obj que será salvo no banco de dados
    const obj = {
        produto: produto,
        produtoId: produtoId,
        material: material,
        materialId: materialId,
        preco: parseFloat(preco),
        ativo: true,
        qtde: ""

    }

    if (listaMateriaisAdicionados.length === 0){
        listaMateriaisAdicionados.push(obj)
    } else {
        const resultado = listaMateriaisAdicionados.find(p => p.produto === produto)

        if (resultado == undefined) {
            // adicionar em uma nova linha
            listaMateriaisAdicionados.push(obj)
        } else {
            // juntar na mesma linha
            resultado.material += " , " + material
            resultado.preco = parseFloat(resultado.preco) + parseFloat(preco)
        }
    }

    //exibindo botao enviar para orcamento
    if (listaMateriaisAdicionados.length > 0) {
        btnEnviarOrcamento.style.display = 'inline-block'
    }else {
        btnEnviarOrcamento.style.display = 'none'
    }

    // limpa as linhas da tabela
    const linhas = document.getElementById('tabela').rows.length;
    for (let i= linhas-1; i > 0; i--){
        if (i > 0){
            document.getElementById('tabela').deleteRow(i);
        }
    }
    criarLinha()
}

function criarLinha() {

    const corpo = document.getElementById("corpo")

    listaMateriaisAdicionados.map((p, indice) =>{
        const linha = document.createElement("tr")

        const colProduto = document.createElement("td")
        const colMaterial = document.createElement("td")
        const colPreco = document.createElement("td")
        const colInput = document.createElement("td")
        const colApagar = document.createElement("td")

        const input = document.createElement("input")
        input.type = "number"
        input.value = p.qtde
        input.onkeyup = function() {
            const qtde = this.value
            p.qtde = qtde
        }

        const pro = document.createTextNode(p.produto)
        const mat = document.createTextNode(p.material)
        const pre = document.createTextNode(p.preco)

        const botaoRemover = criarBotao(indice + 1)

        colProduto.appendChild(pro)
        colMaterial.appendChild(mat)
        colPreco.appendChild(pre)
        colInput.appendChild(input)
        colApagar.appendChild(botaoRemover)


        linha.appendChild(colProduto)
        linha.appendChild(colMaterial)
        linha.appendChild(colPreco)
        linha.appendChild(colInput)
        linha.appendChild(colApagar)

        corpo.appendChild(linha)
    })

   // const spanProduto=document.getElementById("produto")
    // spanProduto.textContent = produto
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
        removerItemArray(indice - 1)
    }
    botao.appendChild(textoBotao)
    return botao

}

function calcular() {
    const lucro = document.getElementById("lucro").value
    let porcentagem = (valorUnitarioTotal * (lucro/100)) + valorUnitarioTotal
    document.getElementById("totalQtde").value = parseFloat(porcentagem).toFixed(2)
}

function removerItemArray(indice) {

    listaMateriaisAdicionados.splice(indice, 1)

    //exibindo botao enviar para orcamento
    if (listaMateriaisAdicionados.length > 0) {
        btnEnviarOrcamento.style.display = 'inline-block'
    }else {
        btnEnviarOrcamento.style.display = 'none'
    }


}