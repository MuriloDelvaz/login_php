<?php
session_start();
//apos realizar o login, o usario é redirecionado para essa pagina
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
</head>
<body>
    <?php if (isset($_SESSION['ativa'])) { ?>
        <h1> PAINEL ADMINSTRATIVO DO SITE </h1>
        <h3> Bem vindo, <?php echo $_SESSION ['nome']; ?></h3>
    <?php } else {
        header("location: login.php");
        }//caso o cliente não realizar o login ele voltará para tela inicial (login.php)
    ?>
</body>
</html>