<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style_cancelar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelar Inscrição</title>
</head>
<body>
    <form action="cancelar.php" method="post">
        
        <h1><p class="text">Olá, se increveu mas ocorreu um imprevisto?</p></h1>
        
        
        <div class="cancelado">
            <?php
                if(isset($_SESSION['cancelado'])):
            ?>
                    <p class="txt_cancelado">Sua incrição foi cancelada!</p>
            <?php
                endif;
                unset($_SESSION['cancelado']);
            ?>
        </div>
        <div class="erro">
            <?php
                if(isset($_SESSION['erro'])):
            ?>
                    <p class="txt_erro">OPS! Seu e-mail está incorreto!</p>
            <?php
                endif;
                unset($_SESSION['erro']);
            ?>
        </div>
        
        <div class="text_meio">
        <p class="text2">Digite seu e-mail e cancele sua inscrição.</p>
        <p class="email"><input class="text2" type="text" name="email" id="email" placeholder="E-mail"required maxlength="50"></p>
        <p><button class="text2">Confirmar</button></p>
        </div>
        <div class="voltar"><p><a class="text2" href="index.php">Voltar para área de inscrição</a></p></div>
        <img class="image" src="logo_imw_fundo_transparente2.png" alt="">
        <h2><p class="copy">&copy; Desenvolvido por Luiz Henrique</p></h2>
        
    </form>
</body>
</html>