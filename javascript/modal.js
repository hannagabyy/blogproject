
let abrirModal = document.getElementById('botao__abrir_modal');
abrirModal.addEventListener('click', function() {
    criarModal('editor');
});

function fechaModalAberto(){
	const botaoSalvarEdicao = document.querySelector('#botao_salvar_edicao-post');
	const editor = document.querySelector('.ck-editor');

	if (editor){//apaga o que já estiver aberto
		editor.remove();
		
		//fecha modal de edição se já estiver aberto
		let comentarioEscondido = document.querySelector('.comentario_escondido');
		if(comentarioEscondido){
			botaoSalvarEdicao.remove();
			comentarioEscondido.removeAttribute('style');
			comentarioEscondido.classList.remove('comentario_escondido');
		}				
	}
}

function criarModal(editorId){
	fechaModalAberto();

	ClassicEditor
	.create( document.querySelector('#'+editorId),{
		language: 'pt',
		toolbar: {
			items: [
				'undo', 'redo',
				'|', 'heading',
				'|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
				'|', 'bold', 'italic',
				'|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
			],
			shouldNotGroupWhenFull: false
		}
	}) 
	.then( editor => {
		console.log('editor criado com sucesso');
		// const limite = 10;
		// let contagem = document.getElementById('count-caracter');
		// contagem.textContent = 0 + "/" + limite;

		// editor.model.document.on('change:data', () => {
        //     const text = editor.getData();
        //     contagem.textContent = text.length + "/" + limite;
        //     // Verifica se o texto excede o limite
        //     if (text.length > limite) {
        //         // Se exceder, corta o texto para o limite e descarta o restante
        //         contagem.style.color = "#ff2851";

		// 		const textoAceito = text.slice(0, limite);
        //         console.log(textoAceito);
		// 		text = textoAceito;
        //         // editor.model.change(writer => {
        //         //     writer.setData(textoAceito);
        //         // });
				
        //     }else{
		// 		contagem.style.color = "#737373";
		// 	}
        // });
	} )
	.catch( error => {
			console.log( error );
	} );
};

function editarPost(postId, event){
	event.preventDefault();

	let comentarioId = 'comentarioId'+postId;
	let comentario = document.getElementById(comentarioId);

	criarModal(comentarioId);		

	const div = document.createElement('div');
	div.setAttribute('class', "d-flex justify-content-end");
	comentario.parentElement.appendChild(div);

	const button = document.createElement('button');
	button.setAttribute('class', "d-flex align-items-center col-3 justify-content-center my-3 btn bg-success text-light");
	button.setAttribute('id', "botao_salvar_edicao-post");
	button.innerText="Salvar";
	div.appendChild(button);

	const img =  document.createElement('img');
	img.setAttribute('class', "icones-botoes ms-2");
	img.setAttribute('src', "../../imagens/correct-icon.svg");
	img.setAttribute('alt', "Ícone de correto no botão de postar");
	button.appendChild(img);
	
	comentario.classList.add("comentario_escondido");

	button.addEventListener('click', function(){
		salvarEdicao(postId, event);
	});	
}

function salvarEdicao(postId, event){
	event.preventDefault();	

	let novoComentario = document.querySelector('.ck-content');
	novoComentario.setAttribute('class', "modal-editar");
	let comentarioConcatenado = "";

	const xhttp = new XMLHttpRequest();
	xhttp.onload = function() {
		// window.alert('salvo com sucesso');	
		location.reload();	
	}

	for (let i = 0; i < novoComentario.children.length; i++) {
		comentarioConcatenado += novoComentario.children[i].outerHTML;
	}	

	xhttp.open("POST", "./../../controller/ajax_controllers/editar_post.php");
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("postId="+postId+"&comentario="+comentarioConcatenado);
}

