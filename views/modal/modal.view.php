<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <form data-target="#exampleModal" class="" method="post" action="\Blog_project\public\post\cadastrar_post.php">
                    <div class="modal-header">
                        <button type="button" class="btn-close text-orange" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="col form-group">
                            <textarea name="editor" id="editor">Oque você está pensando ?</textarea>
                                <!-- <div class="row-4 mb-3">
                                    <input type="text" class="form-control input__post" id="post" placeholder="Oque você está pensando?">
                                </div> -->
                                <!-- <div class="row-4 col-2 mb-3">
                                    <select class="form-control form-select" aria-label="Default select example">
                                        <option selected value="Publico">Público</option>
                                        <option value="Privado">Privado</option>
                                    </select>
                                </div>  -->
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary col-2 botao__postar btn text-white d-flex justify-content-center align-items-center">Postar <img class="ms-2" src="\Blog_project\imagens\correct-icon.svg" alt="Ícone de correto no botão de postar"> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    