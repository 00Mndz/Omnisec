<?php
require 'conexao.php';

if(isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])){
    
    require_once 'Usuario.class.php';
    $u = new Usuario();

    $listlogado = $u->logado($_SESSION['iduser']);

    $emailuser = $listlogado['email'];




}else{
    header("Location: Login.php");
}
?>