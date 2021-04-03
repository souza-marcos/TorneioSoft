<?php

class Conexao
{
    //240770 Mdsn2003
    private static $dsn = 'mysql:host=localhost;dbname=240770;port=3306';
    private static $usuario = '240770';
    private static $senha = 'Mdsn2003';
    private static $con = null;

    public static function getConexao()
    {

        if (Conexao::$con == null) {
            try {
                Conexao::$con = new PDO(Conexao::$dsn, Conexao::$usuario, Conexao::$senha);
            } catch (PDOException $e) {
                echo 'ERRO: ' . $e->getMessage();
            }
        }
    }

    public static function getPreparedStatement($sql): PDOStatement
    {

        if (Conexao::$con == null) {
            Conexao::getConexao();
        }
        try {
            return Conexao::$con->prepare($sql);
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
        return null;
    }
}
