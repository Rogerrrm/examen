<?php

namespace Emeset;

class Container
{
    public $config = [];
    public $sql;

    public function __construct($config)
    {
        $this->config = $config;
        $this->sql = $this->db()->getConnection();
    }

    public function response()
    {
        return new \Emeset\Response();
    }

    public function request()
    {
        return new \Emeset\Request();
    }

    public function db(){
        return new \Daw\Db(
            $this->config["db"]["user"],
            $this->config["db"]["pass"],
            $this->config["db"]["db"], 
            $this->config["db"]["host"]
        );
    }

    public function examen()
    {
        return new \Daw\examen($this->sql);
    }

    public function users()
    {
        return new \Daw\Users($this->sql);
    }

}