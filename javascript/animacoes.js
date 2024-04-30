let botoesReagir = document.querySelectorAll('.button-reagir')


botoesReagir.forEach((botao) => {
    botao.addEventListener('click', function(event) {
        let opcoesReagirAtual = this.nextElementSibling; // seleciona o próximo irmão do botão clicado
        if (opcoesReagirAtual.style.display === "flex") {
            opcoesReagirAtual.style.display = "none"; // Oculta as reações se estiverem visíveis
        } else {
            opcoesReagirAtual.style.display = "flex"; // Exibe as reações se estiverem ocultas
        }
        event.stopPropagation();
    });
});

document.addEventListener('click', function(event) {
    if (!event.target.classList.contains('button-reagir')) {
        let opcoesReagir = document.querySelectorAll('.reacoes');
        opcoesReagir.forEach((opcao) => {
            opcao.style.display = "none";
        });
    }
});