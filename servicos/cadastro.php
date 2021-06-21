<?php
include "mensagens.php"; //incluir outros arquivos
include "validacoes.php";

function definir_categoria($idade){
    switch($idade){
        case '7-8':
            return 'Sub-8';;
        case '9-10':
            return 'Sub-10';
        case '11-12':
            return 'Sub-12';
        case '13-14':
            return 'Sub-14';
        case '15-16':
            return 'Sub-16';
        case '17-18':
            return 'Sub-18';
    }
}

RemoveMessage(['nome','sobrenome','numero','posicao','caracteristicas']);
if(validaNome($_POST['nome']) && validaSobrenome($_POST['sobrenome']) && validaPosicao($_POST['posicao']) && validaNumero($_POST['numero']) && validaCaracteristicas($_POST['caracteristicas'])){
    //is_numeric() função para saber se str possui números  
    $nome = $_POST['nome']; //Arquivo vai recuperar qualquer informação que veio do POST; os dados estarão no Body da requisição e não no Header
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $numero = $_POST['numero'];
    $posicao = $_POST['posicao']; //Array numérico
    $posicaoStr = implode(' / ', $posicao);
    $caracteristicas = $_POST['caracteristicas'];
    
    $categoria = definir_categoria($idade);
    sendMessageSucess($nome." ".$sobrenome, $categoria);
}




