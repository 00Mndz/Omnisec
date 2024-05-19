<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht-device-widht, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Controle de Acesso</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="form" action="logar.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img class="imglogin" src="onisesh.png" alt="">
                <h2 class="titulo">Painel de Controle</h2>
                <p>Gerenciar Membros</p>

            </div>

        <div class="card-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Digite seu Email" required>
        </div>

        <div class="card-group">
            <label>Senha</label>
            <input type="password" name="senha" placeholder="Digite sua Senha" required>
        </div>

        <div class="card-group">
            <label><input type="checkbox">Lembre-me</label>
        </div>

        <div class="card-group btn">
            <button type="submit">ENTRAR</button>
        </div>

        

        </div>
    </form>


</body>





</html>