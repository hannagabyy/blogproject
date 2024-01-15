function mostrarAlertaErro(mensagem) {
  Swal.fire({
    title: 'Erro!',
    text: mensagem,
    icon: 'error'
  });
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
  if(redirect){
    setTimeout(function () {
      window.location.href = redirect;
    }, 1000);
  }
}

// Função para alerta de sucesso de login
function mostrarAlertaSucessoLogin(mensagem) {
  Swal.fire({
    title: 'Sucesso!',
    text: mensagem,
    icon: 'success'
  });
  setTimeout(function () {
    window.location.href = './public/home.php';
  }, 1000);
}
function sleep(mensagem){
  setTimeout(() => {
    console.log('entrou no timeout ainn');
    alerta();
  }, "1000");
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

//Login alertas
