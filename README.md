# Formulário Inscrição Juniores de Futebol utilizando HTML5, CSS3 e PHP

## HTML5

> `<form action = "script.php" method = "POST">`
>
> Determinando com o `action` qual arquivo eu irei submeter os dados do formulário. Já com o `method` descreve o tipo do envio que o formulário tenha, com o *POST* os dados não estarão no *Header* da mensagem, e sim no *Body*.



## PHP

> **Utilizando o método de requisição e resposta na web**
>
> Conforme os dados passados no formulário armazenados em um atributo, foi armazenado esses dados em variáveis no PHP utilizando o método *Post*
>
> `$sobrenome = $_POST['sobrenome'];`  
>
> `$email = $_POST['email'];`  
>
> `[...]`  

> **Implementando técnicas de validação de dados**
>
> Foi utilizado tecnicas de validação de dados para filtrar os dados indesejados no sistema, como por exemplo, dados numéricos em campos como *nome* e *sobrenome*, além de verificar se determinados campos estão vazios.
>
> >  `if (is_numeric($_POST['nome'])){ `  
> >
> >  ` echo 'ERRO: Sessão "Nome" não pode ser numérico';`  
> >
> > `  return;`  
> >
> > `}`  
>
> > `else if (empty($_POST['numero'])){`  
> >
> > `  echo 'ERRO: Sessão "Número" está vazia';`  
> >
> > `  return;`  
> >
> > `}`  

