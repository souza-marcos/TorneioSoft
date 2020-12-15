<?php

require_once '../conexao/Conexao.php';
require_once '../modelo/Partida.php';
class DaoPartida
{

    public function incluir(Partida $partida)
    {
        $sql = 'insert into partida(id, timeCasa, golsCasa, timeFora, golsFora, data, local) values (?,?,?,?,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $partida->getId());
            $pst->bindValue(2, $partida->getTimeCasa());
            $pst->bindValue(3, $partida->getGolsCasa());
            $pst->bindValue(4, $partida->getTimeFora());
            $pst->bindValue(5, $partida->getGolsFora());
            $pst->bindValue(6, $partida->getData());
            $pst->bindValue(7, $partida->getLocal());
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
        $sql = 'select * from Partida;';
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
