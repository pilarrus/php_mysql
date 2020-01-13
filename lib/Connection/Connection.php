<?php

namespace lib\Connection;

class Connection {
    protected static $instance = null;

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new Connector();
        }
        return self::$instance;
    }
}
