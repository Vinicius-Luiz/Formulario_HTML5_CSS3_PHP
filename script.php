<?php
$nome = $_POST['nome']; //Arquivo vai recuperar qualquer informação que veio do POST; os dados estarão no Body da requisição e não no Header
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$numero = $_POST['numero'];
$posicao = $_POST['posicao'];
$posicaoStr = implode(' / ', $posicao);
$caracteristicas = $_POST['caracteristicas'];
$categoria = Null;


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
