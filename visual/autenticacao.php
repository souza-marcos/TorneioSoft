<?php
require_once '../Dao/DaoUsuario.php';
require_once '../modelo/Usuario.php';
$daoUsuario = new DaoUsuario();

if (isset($_POST['usuario']) && isset($_POST['senha']) && !isset($_POST['nome'])) {

    $usuario = $daoUsuario->verificarUsuario($_POST['usuario'], $_POST['senha']);
    if ($usuario != null) {
        session_start();
        $_SESSION['usuario'] = [$usuario[0]['id'], $_POST['usuario']];
        header("Location: paginaInicial.php");
    } else {
        // usuario nulo
        header("Location: login.php");
    }
}


if (isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['usuario'])) {
    $usuario = new Usuario();
    $usuario->setNome($_POST['nome']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setUsuario($_POST['usuario']);
    if ($daoUsuario->incluir($usuario)) {
        session_start();
        $usuariobd = $daoUsuario->getId($usuario->getUsuario());
        $_SESSION['usuario'] = [$usuariobd[0]['id'], $usuario->getUsuario()];
        header("Location: paginaInicial.php");
    } else {
        // falha ao inserir usuario
        header("Location: registro.php");
    }
} 
