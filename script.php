<?php
if (is_numeric($_POST['nome'])){
    echo 'ERRO: Sessão "Nome" não pode ser numérico';
    return;
}

else if (is_numeric($_POST['sobrenome'])){
    echo 'ERRO: Sessão "Sobrenome" não pode ser numérico';
    return;
}

else if (strlen($_POST['nome']) < 3){
    echo 'ERRO: Sessão "Nome" muito curta';
    return;
}

else if (strlen($_POST['nome']) > 15){
    echo 'ERRO: Sessão "Nome" muito longa';
    return;
}

if (strlen($_POST['sobrenome']) < 3){
    echo 'ERRO: Sessão " Sobrenome" muito curta';
    return;
}

else if (strlen($_POST['sobrenome']) > 15){
    echo 'ERRO: Sessão "Sobrenome" muito longa';
    return;
}

else if (empty($_POST['numero'])){
    echo 'ERRO: Sessão "Número" está vazia';
    return;
}

else if (empty($_POST['posicao'])){
    echo 'ERRO: Sessão "Posição" está vazia';
    return;
}

else if (empty($_POST['caracteristicas'])){
    echo 'ERRO: Sessão "Características" está vazia';
    return;
}

else {
    $nome = $_POST['nome']; //Arquivo vai recuperar qualquer informação que veio do POST; os dados estarão no Body da requisição e não no Header
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $numero = $_POST['numero'];
    $posicao = $_POST['posicao'];
    $posicaoStr = implode(' / ', $posicao);
    $caracteristicas = $_POST['caracteristicas'];
    $categoria = Null; 

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
