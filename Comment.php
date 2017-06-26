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
    
    function __construct($contenu, $date, $auteur, $upvote, $downvote) {
        $this->contenu = $contenu;
        $this->date = $date;
        $this->auteur = $auteur;
        $this->upvote = $upvote;
        $this->downvote = $downvote;
    }


    
}