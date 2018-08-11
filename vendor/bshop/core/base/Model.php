<?php

namespace bshop\base;

use bshop\Db;

abstract class Model {
    
    public $db; 
    public $attributes = [];
    public $errors = [];
    public $rules = [];
    
    public function __construct() {
        $this->db = Db::instance();
    }
}
