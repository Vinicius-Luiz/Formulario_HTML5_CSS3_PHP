<?php
/*
ativar estrutura de tipagem
força com que o script respeite uma checagem de tipo mais forte
*/
function validaNome($nome) : bool /*tipar o retorno*/{
    if (is_numeric($nome)){
        //Array associativo, associa um valor a uma chave 
        SendMessage('mensagem_erro_nome', 'Sessão "Nome" não pode ser numérico');
        return false;
    }
    
    else if (strlen($nome) < 3){
        sendMessage('mensagem_erro_nome', 'Sessão "Nome" muito curta');
        return false;
    }
    
    else if (strlen($nome) > 15){
        sendMessage('mensagem_erro_nome', 'Sessão "Nome" muito longa');
        return false;
    }
    return true;
}

function validaSobrenome($sobrenome){
    if (is_numeric($sobrenome)){
        sendMessage('mensagem_erro_sobrenome', 'Sessão "Sobrenome" não pode ser numérico');
        return false;
    }

    else if (strlen($sobrenome) < 3){
        sendMessage('mensagem_erro_sobrenome', 'Sessão "Sobrenome" muito curta');
        return false;
    }
    
    else if (strlen($sobrenome) > 15){
        sendMessage('mensagem_erro_sobrenome', 'Sessão "Sobrenome" muito longa');
        return false;
    }
    return true;
}

function validaPosicao($posicao){
    if (empty($posicao)){
        sendMessage('mensagem_erro_posicao', 'Sessão "Posição" está vazia');
        return false;
    }
    return true;
}

function validaNumero($numero){
    if (empty($numero)){
        sendMessage('mensagem_erro_numero', 'Sessão "Número" está vazia');
        return false;
    }
    return true;
}

function validaCaracteristicas($caracteristicas){
    if (empty($caracteristicas)){
        sendMessage('mensagem_erro_caracteristicas', 'Sessão "Características" está vazia');
        return false;
    }
    return true;
}