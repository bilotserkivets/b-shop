<?php

namespace app\controllers;


use bshop\Cache; 

class MainController extends AppController {
    
    public function indexAction() {
                
//        $params = [
//            'id' => 1
//        ];
//        $data = $this->db->column("SELECT name FROM users WHERE id=:id", $params);
        
         
        $this->setMeta('Главная страница', 'Описание', 'Ключевики');
             
    }
    
}
