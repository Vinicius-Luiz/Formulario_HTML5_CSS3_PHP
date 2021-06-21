<?php
    include "servicos/mensagens.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <section class="mensagem">
        <div class = 'nome'>
            <?php
                $mensagem = getMessageSucess('nomeCadastro');
                if (!empty($mensagem)){
                    echo $mensagem;
                }
            ?>
        </div>
        <div class="categoria">
            <?php
                $mensagem = getMessageSucess('categoriaCadastro');
                if (!empty($mensagem)){
                    echo $mensagem;
                }
            ?>
        </div>
    </section>
</body>
</html>