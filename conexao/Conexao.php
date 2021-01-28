<?php

class Conexao{
    //private static $dsn = 'mysql:host=sql113.epizy.com;dbname=epiz_27775917_lancealance;port=3306';
    // private static $usuario = 'epiz_27775917';
    // private static $senha = 'ZeVJ8IOCOe3Z';
    // private static $con = null;

    private static $dsn = 'mysql:host=127.0.0.1;dbname=lancealance;port=3306';
    private static $usuario = 'root';
    private static $senha = '';
    private static $con = null;
    
    public static function getConexao() {

        if(Conexao::$con == null){
            try {
                Conexao::$con = new PDO(Conexao::$dsn, Conexao::$usuario, Conexao::$senha);
            } catch (PDOException $e) {
                echo 'ERRO: '.$e->getMessage();
            }
        }
    }
    
    public static function getPreparedStatement($sql) :PDOStatement{

        if(Conexao::$con == null){
            Conexao::getConexao();
        }
        try {
            return Conexao::$con->prepare($sql);
        } catch (PDOException $e){
            echo 'ERRO: '.$e->getMessage();
        }
        return null;
    }
}