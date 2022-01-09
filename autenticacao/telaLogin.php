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
                <div class="notification is-danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
                <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                ?>
            </div>


            <div id="formContent">

            <a href="./telaLogin.php"><h2 class="active"> Sign In </h2></a>
            <a href="./telaCadastrar.php"><h2 class="inactive underlineHover">Sign Up </h2></a>
        
        
            <form action="./login.php" method="POST">
                
                <input name="usuario" name="text" type="text" class="fadeIn second"  placeholder="login">
                <input name="senha" type="text" class="fadeIn third" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
                
            </form>
 
        
            </div>
        </div>
    </body>

</html>