<?php

include('conexao.php');

if(isset($_POST['nome']) || isset($_POST['senha'])) {

    if(strlen($_POST['nome']) == 0) {
        echo "preencha seu usuario" ;
    } else if(strlen($_POST['senha']) == 0) {
        echo "preencha sua senha";
    } else {

        $nome = $mysqli->real_escape_string($_POST['nome']);
        $senha = $mysqli->real_escape_string($_POST['senha']);     

        $sql_code = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("falha na execução do código SQL");

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            

            header("location: cadastro.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
      }
    }
  }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>LoginPage</title>
</head>
<body>
    <section class="area-login">
        <div class="login">
            <div>
                <img src="onisesh.png">
            </div>

            <form method="post">
                <input type="text" name="nome" placeholder="Nome de Usuario" autofocus>
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" value="Entrar">
            </form>
            <p>Não possui cadastro?<a href="cadastro.php">Cadastrar-se</a></p>

        </div>
    </section>
</body>

</html>

