function mostrarAlertaErro(mensagem) {
  
  Swal.fire({
    title: 'Erro!',
    text: mensagem,
    icon: 'error'
  });
  document.body.classList.remove('swal2-height-auto');
}

// Função para alerta de confirmação
function mostrarAlertaConfirmacao(mensagem, confirmCallback) {
  Swal.fire({
    title: 'Você tem certeza?',
    text: mensagem,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Sim, deletar!'
  }).then((result) => {
    if (result.isConfirmed) {
      confirmCallback();
    }
  });
}

// Função para alerta de sucesso
function mostrarAlertaSucesso(mensagem,redirect=null) {
  
  Swal.fire({
    title: 'Sucesso!',
    text: mensagem,
    icon: 'success',
    showConfirmButton:false
  });
  document.body.classList.remove('swal2-height-auto');
  if(redirect){
    setTimeout(function () {
      window.location.href = redirect;
    }, 1000);
  }
  
}


let botoesApagar = document.querySelectorAll('.apagar-post');

if(botoesApagar!== null){
  botoesApagar.forEach(function (botao) {
    botao.addEventListener('click', function (e) {
      e.preventDefault();
      let formPost = botao.closest('form');

      mostrarAlertaConfirmacao('Você não conseguira reverter isso!', function () {
        formPost.submit();
        mostrarAlertaSucesso('Post apagado com sucesso!');
      });
    });
  });
}

function toastMessagem(icone,mensagem,cor){
  //remove o alerta anterior
  if(document.getElementById('toastMessagem')){
    document.getElementById('toastMessagem').remove();
  }

  let divMessage = document.createElement("div");
  divMessage.classList.add("position-fixed", "bottom-0", "end-0", "p-3");
  divMessage.style.zIndex = "11";
  divMessage.id = "toastMessagem";

  // Define o HTML interno da div
  divMessage.innerHTML = `
    <div id="liveToast" class="toast bg-dark" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header bg-dark text-light">
        <i class="icone-toast fa-solid ${icone} mx-1"></i>
        <strong class="me-auto"> Mensagem </strong>
        <small>Segundos atrás</small>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        ${mensagem}
      </div>
    </div>
  `;
  document.body.appendChild(divMessage);



  let toastLiveMensagem = document.getElementById('liveToast');
  let toast = new bootstrap.Toast(toastLiveMensagem);
  let iconeToast = document.querySelector('.icone-toast ');
  iconeToast.style.color = cor;

  toast.show()        
  
}

//criando hover
var btnHover = document.querySelector('.btn-submit');
if(btnHover){
  btnHover.onmousemove = function(e){
    var x = e.pageX - btnHover.offsetLeft;
    var y = e.pageY - btnHover.offsetTop;
    

    btnHover.style.setProperty('--eixoX',x + 'px');
    btnHover.style.setProperty('--eixoY',y + 'px') 
  }
}