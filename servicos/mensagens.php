<?php
session_start();

//void = retorno vazio
function SendMessage(string $sessao, string $mensagem) : void{
    $_SESSION[$sessao] = $mensagem;
    header('location: ../index.php');
}

//?string significa que o método pode retornar string ou null
function GetMessage(string $sessao) : ?string{
    if(isset($_SESSION['mensagem_erro_'.$sessao])){
        //Verificar se a mensagem de erro foi setada
        return $_SESSION['mensagem_erro_'.$sessao];
    }
    return null;
}

function RemoveMessage(array $sessao_list) : void{
    foreach($sessao_list as $sessaoTemp){
        $s = 'mensagem_erro_'.$sessaoTemp;
        if(isset($_SESSION[$s])){
            unset($_SESSION[$s]);
            //se estiver setada, irá eliminar uma variável
        }
    }
}

function sendMessageSucess($nome, $categoria){
    $_SESSION['nomeCadastro'] = "Boa sorte ".$nome."!";
    $_SESSION['categoriaCadastro'] = "Sua categoria é ".$categoria;
    header('location: ../index2.php');
}

function GetMessageSucess(string $sessao) : ?string{
    if(isset($_SESSION[$sessao])){
        //Verificar se a mensagem de erro foi setada
        return $_SESSION[$sessao];
    }
    return null;
}