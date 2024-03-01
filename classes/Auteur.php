

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

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    // La méthode __toString permet à un d'appeler directment objet de classe et de décider comment il doit réagir
    public function __toString() {
        return "L'auteur s'appelle : " . $this->prenom . " " . $this->nom;
    }

    // Création d'une méthode pour afficher la bibliographie
    public function afficherBiblioagraphie() {
        return 
        "Livres de " ;
    }
}






// "Livres de " . $this->auteur->getPrenom() . " " . $this->auteur->getNom() . "<br><br>";