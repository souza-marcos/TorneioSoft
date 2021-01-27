<?php
require_once '../conexao/Conexao.php';
require_once '../modelo/Usuario.php';
class DaoUsuario
{
    public function incluir(Usuario $usuario)
    {
        $sql = 'insert into usuario(id,nome,usuario,senha) values (?,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $usuario->getId());
            $pst->bindValue(2, $usuario->getNome());
            $pst->bindValue(3, $usuario->getUsuario());
            $pst->bindValue(4, $usuario->getSenha());
            if ($pst->execute()) {
                return true;
            }
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
        return false;
    }

    public function getLista()
    {
        $sql = 'select * from usuario;';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->execute();
            $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $lista;
    }
    public function getUsuario($id)
    {
        $sql = 'select * from usuario where id = ' . $id . ';';
        $result = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->execute();
            $result = $pst->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    }
    public function getId($usuario)
    {
        $sql = 'select * from usuario where usuario = "' . $usuario . '";';
        $result = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->execute();
            $result = $pst->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    }
    public function verificarUsuario($usuario, $senha)
    {
        $sql = 'select * from usuario where usuario ="' . $usuario . '" and senha ="' . $senha . '";';
        $result = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->execute();
            $result = $pst->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    }
}
