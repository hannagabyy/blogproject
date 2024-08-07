<?php
require_once(__DIR__."/../../includes.php");
require_once(__DIR__."/../../protect.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");


$id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
$fotoPerfil = (isset($_FILES['fotoPerfil']))? $_FILES['fotoPerfil'] : null;


/* atualização */ 
$resultado = [
    'sucesso'=> false,
    'msg' => 'Algo deu errado, verifique sua alteração tente novamente!'
];

if($_POST){
    $camposEditaveis = [
        'nome',
        'email',
        'usuario',
        'senha',
        'sobreMim'
    ];
    $filtroPorTipo = [
        'nome' => FILTER_SANITIZE_SPECIAL_CHARS,
        'email' => FILTER_VALIDATE_EMAIL,
        'usuario' => FILTER_SANITIZE_SPECIAL_CHARS,
        'senha' => FILTER_SANITIZE_SPECIAL_CHARS,
        'confirmarSenha' => FILTER_SANITIZE_SPECIAL_CHARS,
        'sobreMim' => FILTER_SANITIZE_SPECIAL_CHARS
    ];          
   
    //validando dados recebidos
    $usuario = Usuarios::getUsuariosById($id);
    $alteracoes = [];

    foreach($camposEditaveis as $campo){
        if($campo != 'senha'){
            $novoValor = filter_input(INPUT_POST, $campo, $filtroPorTipo[$campo]);
            ($novoValor != $usuario[$campo] && !empty($novoValor)) ? $alteracoes[$campo] = $novoValor : FALSE;
        }
        else{
            $novaSenha = filter_input(INPUT_POST, 'senha', $filtroPorTipo['senha']);
            $confirmacaoDeSenha = filter_input(INPUT_POST, 'confirmarSenha', $filtroPorTipo['confirmarSenha']);
            (strlen($novaSenha) > 6 && $novaSenha == $confirmacaoDeSenha)? $alteracoes['senha'] = password_hash($novaSenha,PASSWORD_DEFAULT) : FALSE;
        }
    }

    //atualização da foto de perfil
    if(isset($fotoPerfil) && ($fotoPerfil['size'] > 0)){
        $resultadoImg = atualiza_foto_perfil($fotoPerfil);
        
        if(!is_null($resultadoImg['erro'])){
            $resultado['msg'] = $resultadoImg['erro'];
        }
        else{
            unlink('../../'.$usuario['foto']);
            $alteracoes['foto'] = $resultadoImg['nomeImg'];
        }
    }
        

    //salvando os dados editados
    $resultado['sucesso'] = Usuarios::updateUsuarios($id, $alteracoes);
}

print(json_encode($resultado));