<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>CHALLENGE</title>       
        <link rel="stylesheet" href="../css/login.css">
    </head>
    

    <body>
        <div class="wrapper fadeInDown">
            <div>
                <?php
                    if(isset($_SESSION['nao_autenticado'])):
                ?>
                <div class="alert alert-danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
                <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                ?>
            </div>
                <?php
                    $mensagem = '';
                    if(isset($_SESSION['status']) == 'erro'):
                ?>
                <div class="alert alert-danger">
                    <p>ERRO: Sem permissão de acesso!</p>
                </div>
                <?php
                    endif;
                    unset($_SESSION['status']);
                ?>
            <div>
                <?php
                    if(isset($_SESSION['nao_autenticado'])):
                ?>
                <div class="alert alert-danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
                <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                ?>
            </div>


            <div id="formContent">

            <a href="./login.php"><h2 class="active"> Sign In </h2></a>
            <a href="./cadastrar.php"><h2 class="inactive underlineHover">Sign Up </h2></a>
        
        
            <form action="./login.php" method="POST">
                
                <input name="usuario" type="text" class="fadeIn second"  placeholder="usuário">
                <input name="senha" type="password" required="required" class="fadeIn third" placeholder="senha">
                <input type="submit" class="fadeIn fourth" value="Log In">
                
            </form>

            </div>
        </div>
    </body>

</html>