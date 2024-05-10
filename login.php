<?php 
//conversação de login com fuctions
//requerir apenas uma vez
require_once "functions.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acesso ao Site</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend> Painel de Login</legend>
            <input type="email" name="email" placeholder ="Informe o seu E-mail"require>
            <input type="password" name="senha" placeholder ="Ensira a sua Senha"require>
            <input type = "submit" name="acessar" value="Acessar">
        </fieldset>
    </form>
    <?php
        if(isset($_POST['acessar'])){
            login($connect);
        }
    
    ?>
</body>
</html>