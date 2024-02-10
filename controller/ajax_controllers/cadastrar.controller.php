<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");

foreach( $_POST as $post){
  echo $post;
}

// $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
// $senha = $_POST['senha'];

// //cadastra o novo usuario
// if(isset($_POST['submit'])){
        
    

//     $resultado = Usuarios::insertUsuarios($email, $usuario, password_hash($senha,PASSWORD_DEFAULT));
//     if ($resultado){
//         echo'<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
//         <div class="toast-header">
//           <img src="..." class="rounded me-2" alt="...">
//           <strong class="me-auto">Bootstrap</strong>
//           <small>11 mins ago</small>
//           <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
//         </div>
//         <div class="toast-body">
//           Hello, world! This is a toast message.
//         </div>
//       </div>';
//     }
    
//     header('Location: ../index.php');
// }

// 
?>    