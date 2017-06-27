<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of utilisateur
 *
 * @author arethens
 */
class Utilisateur {
    public $pseudo;
    protected $mdp;
    protected $bio;
    
    function __construct($pseudo, $mdp, $bio) {
        $this->pseudo = $pseudo;
        $this->mdp = $mdp;
        $this->bio = $bio;
    }
    
    function getPseudo() {
        return $this->pseudo;
    }

    function getMdp() {
        return $this->mdp;
    }

    function getBio() {
        return $this->bio;
    }

    function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    function setBio($bio) {
        $this->bio = $bio;
    }




}

