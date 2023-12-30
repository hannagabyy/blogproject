let abrirModal = document.getElementById('botao__abrir_modal');
abrirModal.addEventListener('click', function (){
	let editor = document.querySelector('.ck-editor');
	console.log(editor)
	if (!editor){
		ClassicEditor
		.create( document.querySelector( '#editor' ),{
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
	} )
		.then( editor => {
				console.log( editor );
		} )
		.catch( error => {
				console.log( error );
		} );
	};
});