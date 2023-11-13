<?php

namespace DAW;

class Users {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $stm = $this->sql->prepare("select * from user");
        $stm->execute();
        
        $tasks = array();
        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }
        return $tasks;
    }


    public function login($nom, $apellido){
        $stm = $this->sql->prepare('select * from register where nombre = :nom;');
        $stm->execute([':nom' => $nom]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if(is_array($result) && $result["apellidos"] == $apellido){
            return $result;
        } else {
            return false;
        }
    }
    public function usuariolinea($usuariolinea, $apellido){
        $stm = $this->sql->prepare('SELECT * FROM register WHERE nombre = :nom;');
        $stm->execute([':nom' => $usuariolinea]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
    
        if(is_array($result) && $result["apellidos"] == $apellido){
            return $result;
        } else {
            return false;
        }
    }
    

    public function register($Nom, $Cognoms, $Datanaixement, $adreca) {
        $stm = $this->sql->prepare('INSERT INTO register (nombre, apellidos, fecha_nacimiento, direccion) VALUES (:Nom, :Cognom, :Datanaixement, :adreca);');
        $result = $stm->execute([':Nom' => $Nom, ':Cognom' => $Cognoms,':Datanaixement' => $Datanaixement, ':adreca' => $adreca,]);
    }
}
