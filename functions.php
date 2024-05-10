<?php
$host ="localhost";
$db_user ="root";
$db_pass ="";
$db_name ="projeto_admin"; // esse é o nome que vc crinou no banco de dados mySQL

//conexão com o banco de dados 

//notas: criamos uma variavel onde vai receber uma função expecifica de conexao do php, apos preciso passar esses parametros nessa ordem.
$connect = mysqli_connect($host, $db_user, $db_pass, $db_name);

function login($connect){
    if (isset($_POST['acessar']) AND !empty($_POST['email']) AND ! empty($_POST['senha'])){
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $senha = sha1($_POST['senha']); //shar1 é a criptografia dos dados 
        $query = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' ";
        $executar = mysqli_query($connect, $query);
        $return = mysqli_fetch_assoc ($executar);

        if(!empty($return['email'])){
            //echo "Bem vindo ".$return['nome']; //quando o login é feito com sucesso

                session_start();
                $_SESSION['nome'] = $return['nome'];
                $_SESSION['id'] = $return['id'];
                //$_SESSION['ativa'] = TRUE;
                header("location: index.php"); // nessa etapa ja vou direcionar o meu usuario para a tela de index
        }else{
            echo "usuario ou senha não encontrado!";
        }
    }
    }

