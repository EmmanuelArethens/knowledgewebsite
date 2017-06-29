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
include_once 'Post.php';
include_once 'Comment.php';

class Database {
    function saveUser($user) {
        if (!is_dir('user')) {
            mkdir('user');
        }
        $fd = fopen('user/'.$user->pseudo, 'w+');
        fwrite($fd, serialize($user));
        fclose($fd);
    }
    
    function loaduser($username, $mdp){
        if(is_file('user/'.$username)){
            $user = unserialize(file_get_contents('user/'.$username));
            echo $user->getMdp();
            echo $mdp;
            if ($user->getMdp() == $mdp){
                return $user;
            }
        }
        return false;
    }
   
    
     function saveComment($com) {
     if(!is_dir('comment')){
         mkdir('comment');
     }
         $fd = fopen('comment/'.$com->getDate()->format('Y-m-d').'.txt', "w+");
         fwrite($fd, serialize($com));
         fclose($fd);
       
}
}
