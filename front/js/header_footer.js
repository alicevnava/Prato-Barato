// Função para carregar o conteúdo do header
function loadHeader() {
    fetch('header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header').innerHTML = data;
        })
        .catch(error => console.error('Erro ao carregar o header:', error));
}

// Função para carregar o conteúdo do footer
function loadFooter() {
    fetch('footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer').innerHTML = data;
        })
        .catch(error => console.error('Erro ao carregar o footer:', error));
}

// Carregar o header e o footer quando a página estiver totalmente carregada
document.addEventListener('DOMContentLoaded', function() {
    loadHeader();
    loadFooter();
});
