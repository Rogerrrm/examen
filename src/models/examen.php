<?php

namespace Daw;

class examen {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll($userId){
        $stm = $this->sql->prepare("select nombre from register where id = :id_user;");
        $stm->execute([':id_user' => $userId]);
        
        $tasks = array();
        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }
        return $tasks;
    }
}
