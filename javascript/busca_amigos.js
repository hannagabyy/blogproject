function buscarAmigo(nomePesquisa){
    console.log('teclou');
    let caixaDeResultado = document.querySelector('#caixaDeResultados');

    if (nomePesquisa.length == 0) { 
        caixaDeResultado.style.display='none';
        caixaDeResultado.innerHTML = "";
        return;
    }

    const xhttp = new XMLHttpRequest();
    
    xhttp.onload = function() {
        caixaDeResultado.style.display='block';
        caixaDeResultado.innerHTML = this.responseText;
    }

    xhttp.open("POST", "../../controller/ajax_controllers/busca_amigo.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("nomePesquisa="+nomePesquisa);
}

function atualizaAmizade(icone){
    let usuarioId = icone.getAttribute('data-usuarioid');

    const xhttp2 = new XMLHttpRequest();

    xhttp2.open("POST", "../../controller/ajax_controllers/atualiza_amizade.php");
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send("amigoId="+usuarioId); 

    atualizaIcone(icone);
}


function atualizaIcone(icone){
    if(icone.src.endsWith('/add-friend-icon.svg')){
        icone.src = icone.src.replace('add', 'added');

    }else if(icone.src.endsWith('/added-friend-icon.svg')){
        icone.src = icone.src.replace('added', 'add');
    }
   
}