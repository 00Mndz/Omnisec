<?php
require 'verifica.php';

if(isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])):
?>
.myBackground {
     background-image: url(https://i.imgflip.com/2/34c2k2.jpg);
     color: white
}
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="ie-edge">
    <title>DashboardDocument</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mt-4 bg-dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="onisesh.png" alt="" style="width:80px;height:80px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Vendas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Membros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Outros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ações</a></li>
            <li><a class="dropdown-item" href="#">Votações</a></li>
            <li><a class="dropdown-item" href="#">Quem somos</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="form inline my 2 my-lg-0">
      <label class="mr-"><?php echo '<font color="white"><p class="lead">'."$emailuser "?></label>
      <a href="logout.php"><img src="sair.png" alt="sair" style="width:42px;height:42px;"></a>
      
        
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php else: header("Location: login.php"); endif; ?>