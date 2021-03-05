<?php
    session_start();
    include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo_index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Presença</title>
    </head>
<body>
    <div class="ficha">
        <form action="enviar.php" method="POST">
                <div class="lista">
                    <p class="text_acima"><h1>Lista de Presença</h1></p>
                    <div>

                        <?php
                            if(isset($_SESSION['sucesso'])):
                        ?>
                                <p class="sucesso">PARABÉNS! Inscrição feita com sucesso.</p>
                        <?php
                            endif;
                            unset($_SESSION['sucesso']);
                        ?>
                    </div>
                    <div>
                        <?php
                            if(isset($_SESSION['emailErro'])):
                        ?>
                                <p class="erro">ERRO! E-mail já inscrito.</p>
                        <?php
                            endif;
                            unset($_SESSION['emailErro']);
                        ?>
                    </div>
                    <div>
                        <?php
                            if(isset($_SESSION['max_inscritos'])):
                        ?>
                                <label id="erro2">OPS! Todas as incrições já foram preenchidas, sinto muito.</label>
                        <?php
                            endif;
                            unset($_SESSION['max_inscritos']);
                        ?>        
                    </div>
                    <div class="txt_meio">
                    <p><input class="button" type="text" name="nome" id="nome" placeholder="Nome" required maxlength="30" ><span></span></p>
                    <p><input class="button" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required maxlength="30" ><span></span></p>
                    <p class="data"><input class="button" type="date" name="nascimento" id="nascimento" required placeholder="Data de Nascimento" maxlength="8" ><span id="data"></span></p>
                    <p class="text">Selecione sua Igreja <select class="igreja" name="igreja" id="igreja">
                        <option value="IMW Campinas/SP">IMW Campinas/SP</option>
                        <option value="IMW Joanópolis/SP">IMW Joanópolis/SP</option>
                        <option value="IMW Cosmópolis/SP">IMW Cosmópolis/SP</option>
                                            </select></p>
                    <p><input class="button" type="text" name="email" id="email" placeholder="E-mail"required maxlength="50" ><span></span></p>
                    <button class="enviar">Enviar</button>
                    </div>
                    <img class="image" src="logo_imw_fundo_transparente2.png" alt="">
                    
                    <div class="voltar"><p><a href="cancelar_inscrição.php">Quer cancelar sua incrição?</a></p></div>
                    
                    <div class="copy">
                    <h2>&copy; Desenvolvido por Luiz Henrique</h2>
                    </div>
                    
                </div>
                            
        </form>
                    
    </div>
</body>
</html>


























