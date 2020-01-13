<?php

namespace lib\Connection;

class Connection {
    protected static $instance = null;

    public static function getInstance(){
        if(self::$instance === null){
            $string_json = file_get_contents("./config_app.json", FILE_USE_INCLUDE_PATH);
            self::$instance = new Connector($string_json);
        }
        return self::$instance;
    }
}
