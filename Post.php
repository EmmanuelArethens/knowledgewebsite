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
 
 public function __construct($contenu, DateTime $date, $auteur, $titre, $categorie) {
       parent::__construct($contenu, $date, $auteur);
       $this->categorie = $categorie;
       $this->titre = $titre;
       
   }
   function getTitre() {
       return $this->titre;
   }

   function getCategorie() {
       return $this->categorie;
   }

   function setTitre($titre) {
       $this->titre = $titre;
   }

   function setCategorie($categorie) {
       $this->categorie = $categorie;
   }




}
