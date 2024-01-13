function buscarAmigo(nomePesquisa){
    console.log('teclou');
    let caixaDeResultado = document.querySelector('#caixa_de_resultado');

    if (nomePesquisa.length == 0) { 
        caixaDeResultado.style.display='none';
        caixaDeResultado.innerHTML = "";
        return;
    }

    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        caixaDeResultado.style.display='block';
        caixaDeResultado.innerHTML = this.responseText;
         // document.querySelectorAll('').forEach((item) => {//classe de cada nome
            //     item.addEventListener('click', () => {
            //         //evento após click
            //         // let nome_amigo =  item.children[0].innerHTML;
                    
            //         // inputCodCid.setAttribute('disabled', '');

            //         // cid_adicionar(id, codigo);
                                        
            //         // document.getElementById('resultado_cid').innerHTML = null;
            //         // document.querySelector('.caixa_de_resultados').style.display = 'none';

            //         // $.modal.close();
                
            //     })        
                   
            // })
    }

    xhttp.open("POST", "/Blog_project/controller/ajax_controllers/busca_amigo.php");// lembrar de deixar absoluto dps
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("nomePesquisa="+nomePesquisa);

}
