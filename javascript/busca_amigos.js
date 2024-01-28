function buscarAmigo(nomePesquisa){
    console.log('teclou');
    let caixaDeResultado = document.querySelector('#caixaDeResultados');

    if (nomePesquisa.length == 0) { 
        caixaDeResultado.style.display='none';
        caixaDeResultado.innerHTML = "";
        return;
    }

    const xhttp = new XMLHttpRequest();
    const xhttp2 = new XMLHttpRequest();
    
    xhttp.onload = function() {
        caixaDeResultado.style.display='block';
        caixaDeResultado.innerHTML = this.responseText;
        console.log(this.responseText);
        document.querySelectorAll('.card-amigo-resultado').forEach((card) => {
            card.querySelector('.icone-adicionar').addEventListener('click', () => {  
                let icone = card.querySelector('.icone-adicionar');
                let linkPerfil = card.querySelector('.card-nome').parentElement.getAttribute('href');               
                let url = new URL(linkPerfil, window.location.href);

                console.log(url.searchParams.get("id"));

                xhttp2.open("POST", "../../controller/ajax_controllers/adicionar_amigo.php");
                xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp2.send("amigoId="+url.searchParams.get("id")); 
                

                if(icone.src.endsWith('/add-friend-icon.svg')){
                    icone.src = icone.src.replace('add', 'added');
                    console.log('teclou no bt');

                }
                //else if(caminhoIcone.endsWith('/add-friend-icon.svg')){
                //     caminhoIcone.replace('added', 'add');
                //     icone.src = caminhoIcone;
                // }

            });  
                
        })
    }

    xhttp.open("POST", "../../controller/ajax_controllers/busca_amigo.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("nomePesquisa="+nomePesquisa);

}
