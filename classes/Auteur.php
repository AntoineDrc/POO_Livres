

<?php

// Création d'un classe Auteur
class Auteur {
    private string $nom;
    private string $prenom;


    // Constructeur de la classe Auteur
    public function __construct(string $prenom,string $nom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
 
    // Création des getters / setters
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function __toString() {
        return
    }
}

