<?php

require_once '../conexao/Conexao.php';
require_once '../modelo/Lance.php';
class DaoLance
{

    public function incluir(Lance $lance)
    {
        $sql = 'insert into lance(id, partida, gerador, horario, lance, foto) values (?,?,?,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $lance->getId());
            $pst->bindValue(2, $lance->getPartida());
            $pst->bindValue(3, $lance->getGerador());
            $pst->bindValue(4, $lance->getHorario());
            $pst->bindValue(5, $lance->getLance());
            $pst->bindValue(6, $lance->getFoto());
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
        $sql = 'select * from lance;';
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

    public function getLancesPartida($idPartida){
        $sql = 'select * from lance where partida ='.$idPartida.';';
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
}
