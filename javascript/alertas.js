// alert('entrou')
// let botaoApagarPost = document.getElementById('apagar-post');
// botaoApagarPost.addEventListener('click',function(e){
//     e.preventDefault();
//     let formDelete = document.getElementById('form-deletar-post');

//     console.log('clicou no botão')

//     // Swal.fire({
//     //     title: 'Você tem certeza?',
//     //     text: "Você não conseguira reverter isso!",
//     //     icon: 'warning',
//     //     showCancelButton: true,
//     //     confirmButtonColor: '#3085d6',
//     //     cancelButtonColor: '#d33',
//     //     confirmButtonText: 'Sim, deletar!'
//     //   }).then((result) => {
//     //     if (result) {
//     //         formDelete.onsubmit();
//     //     }
//     //   })
// })

// let botao = document.getElementById('clique');
// console.log(botao)
// botao.addEventListener('click', function () {
//   console.log('entrou no cliq1ue')
//   Swal.fire({
//     title: "Good job!",
//     text: "You clicked the button!",
//     icon: "success",
//     timer: 2000
//   });
// })


// $('#botao').on('click',function(e){
//   console.log('entrou jquery')
//   Swal.fire({
//     title: "Good job!",
//     text: "You clicked the button!",
//     icon: "success"
//   });
// })

let botoesApagar = document.querySelectorAll('.apagar-post')

botoesApagar.forEach(function (botao) {
  botao.addEventListener('click', function (e) {
    e.preventDefault();
    let formPost = botao.closest('form');
    // let postIdInput = formPost.querySelector('input[name="PostId"]');
    // let postId = postIdInput.value;
    Swal.fire({
      title: 'Você tem certeza?',
      text: "Você não conseguira reverter isso!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Sim, deletar!'
    }).then((result) => {
      if (result.isConfirmed) {

        formPost.submit();

        Swal.fire({
          title: "Deletado",
          text: "Post Apagado com sucesso!",
          icon: "success"
        });

      }
    });
  });
});