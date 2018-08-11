<?php

namespace bshop;
use PDO;

class Db {
    use TSingletone;
    
    protected $db;
    
    protected function __construct() {
        //$db = require_once CONF . '/config_db.php';
        
//        class_alias('\RedBeanPHP\R', '\R');
//        \R::setup($db['dsn'], $db['user'], $db['password']);
        
        //$db = new PDO($params['dsn'], $params['user'], $params['password']);
                
        //$db->exec("set names utf8");
        
//        if(!\R::testConnection()) {
//            throw new \Exseption("Нет соединения с базой данных", 500);
//        } 
        $params = require_once CONF . '/config_db.php';
        
        // Устанавливаем соединение
        //$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $this->db = new PDO( $params['dsn'], $params['user'], $params['password']);

        // Задаем кодировку
        //$db->exec("set names utf8");
        if(!$this->db) {
            throw new \Exception("Нет соединения с базой данных", 500);
        } 
    

}

public function query($sql, $params =[]) {
    $stmp = $this->db->prepare($sql);
    if(!empty($params)) {
        foreach($params as $key => $val) {
            $stmp->bindValue(':'.$key, $val);
        }
    }
    $stmp->execute();
    return $stmp;
}

public function row($sql, $params =[]) {
    $result = $this->query($sql, $params);
    return $result->fetchAll(PDO::FETCH_ASSOC);
}

public function column($sql, $params =[]) {
    $result = $this->query($sql, $params);
    return $result->fetchColumn();
}


        }