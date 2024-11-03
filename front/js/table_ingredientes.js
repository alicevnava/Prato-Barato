// botão de pesquisar
document.getElementById("btn-search").addEventListener("click", function() {
    const searchContainer = document.getElementById("search-container");
    searchContainer.classList.add("active");
    document.getElementById("search-bar").focus();
});

document.getElementById("search-bar").addEventListener("blur", function() {
    document.getElementById("search-container").classList.remove("active");
});


// modal
document.addEventListener("DOMContentLoaded", function() {
    const btnAdd = document.getElementById("btn-add");
    const modalContainer = document.getElementById("modal-container");

    // Carregar o modal de form.html ao clicar no botão adicionar
    btnAdd.addEventListener("click", function() {
        // Verifica se o modal já está no DOM
        if (!document.getElementById("ingredientesModal")) {
            // Requisição para carregar o modal
            fetch("add_ingredientes.html")
                .then(response => response.text())
                .then(data => {
                    modalContainer.innerHTML = data; // Insere o modal no placeholder

                    // Inicializa o modal com Bootstrap
                    const modal = new bootstrap.Modal(document.getElementById("ingredientesModal"));
                    modal.show(); // Exibe o modal

                    // Adiciona evento para fechar o modal e remover do DOM
                    document.querySelector('.btn-close').addEventListener('click', function() {
                        modal.hide();
                        modalContainer.innerHTML = ''; // Limpa o conteúdo do modal
                    });
                    document.querySelector('.btn-secondary').addEventListener('click', function() {
                        modal.hide();
                        modalContainer.innerHTML = ''; // Limpa o conteúdo do modal
                    });
                })
                .catch(error => console.error("Erro ao carregar o modal:", error));
        } else {
            // Se já existir, apenas exibe o modal
            const modal = new bootstrap.Modal(document.getElementById("ingredientesModal"));
            modal.show();
        }
    });
});


