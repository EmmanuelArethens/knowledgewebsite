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
        $fd = fopen('user/' . $user->pseudo, 'w+');
        fwrite($fd, serialize($user));
        fclose($fd);
    }

    function loaduser($username, $mdp) {
        if (is_file('user/' . $username)) {
            $user = unserialize(file_get_contents('user/' . $username));
            if ($user->getMdp() == $mdp) {
                return $user;
            }
        }
        return false;
    }

    function saveComment($com) {
        if (!is_dir('comment')) {
            mkdir('comment');
        }
        $fd = fopen('comment/' . $_SESSION["user"]->getPseudo().'_'. $com->getDate()->format('Y-m-d H:i:s') . '.txt', "w+");
        fwrite($fd, serialize($com));
        fclose($fd);
    }

    function savePost($pos) {
        if (!is_dir('post')) {
            mkdir('post');
        }
        $fd = fopen('post/' . $pos->getTitre() . '.txt', "w+");
        fwrite($fd, serialize($pos));
        fclose($fd);
    }

    function loadComment() {
        $files = scandir("comment");
        $files = array_diff($files, ['.', '..']);
        foreach ($files as $file) {
            if (is_file($file)) {
                continue;
            }
            echo '<h4>' . basename($file, ".txt") . '</h4>';
            $content = unserialize(file_get_contents('comment/' . $file));
            echo '<p>' . $content->getContenu() . '</p>';
        }
    }

    function loadPost() {
        $files = scandir("post");
        var_dump($files);
        $files = array_diff($files, ['.', '..']);
        foreach ($files as $file) {
            if (is_file($file)) {
                continue;
            }
            echo '<h2>' . basename($file, ".txt") . '</h2>';
            $content = unserialize(file_get_contents('post/' . $file));
            echo '<p>' . $content->getContenu() . '</p>';
            echo '<a href="pagepost.php?manu=' . base64_encode(serialize($content)) . '">' . $content->getTitre() . '</a>';
        }
    }


    function Lienposts() {
        $files = scandir("post");
        $files = array_diff($files, ['.', '..']);
        foreach ($files as $file) {
            if (is_file($file)) {
                continue;
            }
            $content = unserialize(file_get_contents('post/' . $file));
            echo '<a href="pagepost.php?manu=' . base64_encode(serialize($content)) . '">' .'<h4>'. $content->getTitre() .'</h4>'. '</a>' . '</br>';
        }
    }

}
