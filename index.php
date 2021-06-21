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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 id = "titulo">Cadastro Juniores</h1>
        <p id = "subtitulo">Complete as informações do jogador</p>
        <br>
    </header>
    <form action = "servicos/cadastro.php" method = "POST"> <!--action descreve qual arquivo/endereço/rota eu quero submeter os dados / method descreve o tipo do envio que o formulário tenha-->
        <fieldset class = 'grupo'> <!--Agrupador de campos-->
            <div class = "campo">
                <label for="nome"><strong>Nome</strong></label><!--Título do campo-->
                <input type = "text" id = "nome" name="nome" required> <!--required = Obrigatório-->
                <div class = "mensagem-erro" style = "color: #D64040; border-left: 3px solid #D64040; padding-left: 5px; margin-top: 5px;">
                    <?php
                        $mensagemErro = getMessage('nome');
                        /*se if == True; então (?) ; senão (:)
                        $mensagemErro = isset($_SESSION['mensagem_erro_nome']) ? $_SESSION['mensagem_erro_nome'] : ''*/
                        if (!empty($mensagemErro)){
                            echo $mensagemErro;
                        }
                    ?>
                </div>
            </div>
            <div class = "campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type = "text" id = "sobrenome" name = "sobrenome" required>
                <div class="mensagem-erro" style = "color: #D64040; border-left: 3px solid #D64040; padding-left: 5px; margin-top: 5px;">
                    <?php 
                        $mensagemErro = getMessage('sobrenome');
                        if (!empty($mensagemErro)){
                            echo $mensagemErro;
                        }
                    ?>
                </div>
            </div>
        </fieldset>

        <div class = "campo">
            <label for="email"><strong>E-mail</strong></label>
            <input type = "email" id = "email "name = "email" required> <!--Existe tipo email-->
        </div>
        
        <div class = "campo">
            <label><strong>Idade</strong></label><br>
            <label>
                <input type = "radio" name = "idade" value = "7-8" checked> 7-8 anos  <!--checked = Deixa opção marcada por padrão-->
            </label>
            <label>
                <input type = "radio" name = "idade" value = "9-10"> 9-10 anos
            </label>
            <label>
                <input type = "radio" name = "idade" value = "11-12"> 11-12 anos
            </label>
            <label>
                <input type = "radio" name = "idade" value = "13-14"> 13-14 anos
            </label>
            <label>
                <input type = "radio" name = "idade" value = "15-16"> 15-16 anos
            </label>
            <label>
                <input type = "radio" name = "idade" value = "17-18"> 17-18 anos
            </label>
        </div>

        <div class = "campo">
            <label for = "num"><strong>Número</strong></label>
            <select id = 'num' name = 'numero'>
                <option selected disabled value="">Selecione</option> <!--Pre selecionado; desabilitado e sem valor-->
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
            </select>
            <div class="mensagem-erro" style = "color: #D64040; border-left: 3px solid #D64040; padding-left: 5px; margin-top: 5px;">
                    <?php 
                        $mensagemErro = getMessage('numero');
                        if (!empty($mensagemErro)){
                            echo $mensagemErro;
                        }
                    ?>
            </div>
        </div>
       
        <fieldset class="grupo">
            <div id = "check">
                <label><strong>Selecione as posições em que você atua</strong></label><br>
                <input type="checkbox" id = 'posicao1' name = 'posicao[]' value = 'goleiro'> <!--Selecionar múltiplas opções-->
                <label for="posicao1">Goleiro</label><br>
                <input type="checkbox" id = 'posicao2' name = 'posicao[]' value = 'zagueiro'>
                <label for="posicao1">Zagueiro</label><br>
                <input type="checkbox" id = 'posicao3' name = 'posicao[]' value = 'lateral-esq'>
                <label for="posicao1">Lateral Esquerdo</label><br>
                <input type="checkbox" id = 'posicao4' name = 'posicao[]' value = 'lateral-dir'>
                <label for="posicao1">Lateral Direitoo</label><br>
                <input type="checkbox" id = 'posicao5' name = 'posicao[]' value = 'volante'>
                <label for="posicao1">Volante</label><br>
                <input type="checkbox" id = 'posicao6' name = 'posicao[]' value = 'meia-central'>
                <label for="posicao1">Meia Central</label><br>
                <input type="checkbox" id = 'posicao7' name = 'posicao[]' value = 'meia-armador'>
                <label for="posicao1">Meia Armador</label><br>
                <input type="checkbox" id = 'posicao8' name = 'posicao[]' value = 'meia-atacante'>
                <label for="posicao1">Meia Atacante</label><br>
                <input type="checkbox" id = 'posicao9' name = 'posicao[]' value = 'ponta-esq'>
                <label for="posicao1">Ponta Esquerda</label><br>
                <input type="checkbox" id = 'posicao10' name = 'posicao[]' value = 'ponta-dir'>
                <label for="posicao1">Ponta Direita</label><br>
                <input type="checkbox" id = 'posicao11' name = 'posicao[]' value = 'segundo-atacante'>
                <label for="posicao1">Segundo Atacante</label><br>
                <input type="checkbox" id = 'posicao12' name = 'posicao[]' value = 'centroavante'>
                <label for="posicao1">Centroavante</label><br>
            </div>
            <div class="mensagem-erro" style = "color: #D64040; border-left: 3px solid #D64040; padding-left: 5px; margin-top: 5px;">
                    <?php 
                        $mensagemErro = getMessage('posicao');
                        if (!empty($mensagemErro)){
                            echo $mensagemErro;
                        }
                    ?>
                </div>
        </fieldset>

        <div class = "campo">
            <br>
            <label><strong>Descreva mais sobre suas características</strong></label>
            <textarea name="caracteristicas" id="caracteristicas" rows="6" style="width: 26em;"></textarea>
            <div class="mensagem-erro" style = "color: #D64040; border-left: 3px solid #D64040; padding-left: 5px; margin-top: 5px">
                    <?php 
                        $mensagemErro = getMessage('caracteristicas');
                        if (!empty($mensagemErro)){
                            echo $mensagemErro;
                        }
                    ?>
            </div>
        </div>

        <button class = "botao" type = "submit">Enviar</button>
    </form>
</body>
</html>