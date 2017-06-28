<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author arethens
 */
class Comment {
    
    protected $contenu;
    protected $date;
    protected $auteur;
    protected $upvote;
    protected $downvote;
    
    function __construct($contenu, DateTime $date, $auteur) {
        $this->contenu = $contenu;
        $this->date = $date;
        $this->auteur = $auteur;
    }
    
    function getContenu() {
        return $this->contenu;
    }

    function getDate() {
        return $this->date;
    }

    function getAuteur() {
        return $this->auteur;
    }

    function getUpvote() {
        return $this->upvote;
    }

    function getDownvote() {
        return $this->downvote;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    function setUpvote($upvote) {
        $this->upvote = $upvote;
    }

    function setDownvote($downvote) {
        $this->downvote = $downvote;
    }




    
}