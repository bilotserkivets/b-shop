<?php

namespace app\controllers;
 
use app\models\AppModel;
use bshop\base\Controller;

class AppController extends Controller {
    public $db;
    
    public function __construct($route) {
        parent::__construct($route);
        $appModell = new AppModel();
        $this->db = $appModell->db;
    }
}
