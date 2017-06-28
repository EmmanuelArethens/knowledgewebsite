<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './Comment.php';
class Post extends Comment {
 protected $titre;
 protected $categorie;
 
 public function __construct($contenu, DateTime $date, $auteur, $upvote, $downvote, $categorie, $titre) {
       parent::__construct($contenu, $date, $auteur, $upvote, $downvote);
       $this->categorie = $categorie;
       $this->titre = $titre;
   }



}
