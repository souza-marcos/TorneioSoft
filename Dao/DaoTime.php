<?php
require_once '../conexao/Conexao.php';
class DaoTime
{
    public function incluir($time) 
    {
        $sql = 'insert into time(id,nome,cidadeEstado,pais) values (?,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $time->getId());
            $pst->bindValue(2, $time->getNome());
            $pst->bindValue(3, $time->getCidadeEstado());
            $pst->bindValue(4, $time->getPais());
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
        $sql = 'select * from Time;';
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
