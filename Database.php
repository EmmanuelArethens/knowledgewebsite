<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 protected $pseudo;
    protected $bio;
    protected $avatar;
    protected $age;
 */
include_once 'Utilisateur.php';

class Database {
    function saveUser($user) {
        if (!is_dir('user')) {
            mkdir('user');
        }
        $fd = fopen('user/'.$user->pseudo, 'w+');
        fwrite($fd, serialize($user));
        fclose($fd);
    }
    
    function login($username, $mdp){
        if(is_file('user/'.$username)){
            $user = unserialize(file_get_contents('user/'.$username));
            echo $user->getMdp();
            echo $mdp;
            if ($user->getMdp() == $mdp){
                if (session_status() != 2) {
                    session_start();
                }
                $_SESSION['utilisateur'] = $user;
            }
        }
    }

}
