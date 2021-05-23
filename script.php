<?php
session_start();

if (is_numeric($_POST['nome'])){
    //Array associativo, associa um valor a uma chave 
    $_SESSION['mensagem_erro_nome'] = 'Sessão "Nome" não pode ser numérico'; 
    header('location: index.php');
    return;
}

else if (is_numeric($_POST['sobrenome'])){
    $_SESSION['mensagem_erro_sobrenome'] = 'Sessão "Sobrenome" não pode ser numérico'; 
    header('location: index.php');
    return;
}

else if (strlen($_POST['nome']) < 3){
    $_SESSION['mensagem_erro_nome'] = 'Sessão "Nome" muito curta'; 
    header('location: index.php');
    return;
}

else if (strlen($_POST['nome']) > 15){
    $_SESSION['mensagem_erro_nome'] = 'Sessão "Nome" muito longa'; 
    header('location: index.php');
    return;
}

if (strlen($_POST['sobrenome']) < 3){
    $_SESSION['mensagem_erro_sobrenome'] = 'Sessão " Sobrenome" muito curta'; 
    header('location: index.php');
    return;
}

else if (strlen($_POST['sobrenome']) > 15){
    $_SESSION['mensagem_erro_sobrenome'] = 'Sessão "Sobrenome" muito longa'; 
    header('location: index.php');
    return;
}

else if (empty($_POST['numero'])){
    $_SESSION['mensagem_erro_numero'] = 'Sessão "Número" está vazia'; 
    header('location: index.php');
    return;
}

else if (empty($_POST['posicao'])){
    $_SESSION['mensagem_erro_posicao'] = 'Sessão "Posição" está vazia'; 
    header('location: index.php');
    return;
}

else if (empty($_POST['caracteristicas'])){
    $_SESSION['mensagem_erro_caracteristicas'] = 'Sessão "Características" está vazia'; 
    header('location: index.php');
    return;
}

else {
    $nome = $_POST['nome']; //Arquivo vai recuperar qualquer informação que veio do POST; os dados estarão no Body da requisição e não no Header
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $numero = $_POST['numero'];
    $posicao = $_POST['posicao']; //Array numérico
    $posicaoStr = implode(' / ', $posicao);
    $caracteristicas = $_POST['caracteristicas'];
}

//is_numeric() função para saber se str possui números

if ($idade === '7-8'){
    $categoria = 'Sub-8';
}
else if ($idade === '9-10'){
    $categoria = 'Sub-10';
}
else if ($idade === '11-12'){
    $categoria = 'Sub-12';
}
else if ($idade === '13-14'){
    $categoria = 'Sub-14';
}
else if ($idade === '15-16'){
    $categoria = 'Sub-16';
}
else if ($idade === '17-18'){
    $categoria = 'Sub-18';
}

print('NOME: '.$nome.'<br>'.'SOBRENOME: '.$sobrenome.'<br>'.'E-MAIL: '.$email.'<br>'.'CATEGORIA: '.$categoria.'<br>'.'POSIÇÃO: '.$posicaoStr.'<br>'.'NÚMERO: '.$numero.'<br>'.'CARACTERÍSTICAS: '.$caracteristicas);
