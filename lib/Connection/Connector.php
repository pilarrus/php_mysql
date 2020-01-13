<?php

namespace lib\Connection;

class Connector {

    protected $db;
    protected $db_name;
    protected $user;
    protected $password;
    protected $connector;

    public function __construct($configFile) {
        $config = json_decode($configFile, true);
        //var_dump($config);
        $this->db = $config['db'];
        $this->db_name = $config['db_name'];
        $this->user = $config['user'];
        $this->password = $config['password'];
    }
}
