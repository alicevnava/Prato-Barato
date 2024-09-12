function mostrarCampos(){
    let select = document.getElementById('cargo').value

    // pega as divs
    let camposCozinheiro = document.getElementById('campos-cozinheiro')
    let camposGeral = document.getElementById('campos-geral')

    // no inicio fica vazio
    camposCozinheiro.style.display='none'
    camposGeral.style.display='none'

    // de acordo com o selecinado
    if (select == '2'){
        camposCozinheiro.style.display = 'block'
    } else if (select == '3'|| select == '4'){
        camposGeral.style.display = 'block'
    }
}