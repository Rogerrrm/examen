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


    public function login($user, $pass){
        $stm = $this->sql->prepare('select * from user where user=:user;');
        $stm->execute([':user' => $user]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if(is_array($result) && $result["pass"] == $pass){
            return $result;
        } else {
            return false;
        }
    }

    public function register($user, $surname, $pass, $email, $phone, $card_number) {
        $stm = $this->sql->prepare('INSERT INTO user (user, surname, pass, email, phone, card_number) VALUES (:user, :surname, :pass, :email, :phone, :card_number);');
        $result = $stm->execute(['user' => $user, 'surname' => $surname, 'pass' => $pass, 'email' => $email, 'phone' => $phone, 'card_number' => $card_number]);
    }
}
