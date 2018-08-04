<?php

namespace bshop;

class Registry {
    use TSingletone;
    
    protected static $propertis = [];
    
    public function setProperty($name, $value) {
        self::$propertis[$name] = $value;
    }
    
    public function getProperty($name) {
        if(isset(self::$propertis[$name])) {
            return self::$propertis[$name];
        }
        return null;
    }
    
    public function getProperties() {
        return self::$propertis;
        
}
}
