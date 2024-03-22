<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form data-target="#exampleModal" id="form-modal" method="post" action="\Blog_project\public\post\cadastrar_post.php">
                <div class="modal-header" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col form-group">
                        <textarea name="editor" id="editor"  maxlength="10" placeholder="Oque você está pensando ?"></textarea>
                    </div>
                    <select name="privacidade" class="privacidade-post">
                     <option value="2" >Privado</option>
                    <option value="1" >Público</option>
                        
                    </select>
                    
                </div>
                <div class="modal-footer">
                    
                    <div id="count-caracter"></div>
                    <button type="submit" id="submitPost"class="btn  col-2 botao__postar btn text-white d-flex justify-content-center align-items-center">Postar <img class="ms-2" src="\Blog_project\imagens\correct-icon.svg" alt="Ícone de correto no botão de postar"> </button>
                </div>
            </form>
        </div>
    </div>
</div>

