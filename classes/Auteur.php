

<?php

// Création d'un classe Auteur
class Auteur {
    private string $nom;
    private string $prenom;


    // Constructeur de la classe Auteur
    public function __construct(string $prenom,string $nom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
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

    public function getLivres()
    {
        return $this->livres;
    }

    public function setLivres($livres)
    {
        $this->livres = $livres;

        return $this;
    }

    // Création méthode pour ajouter des livres au tableau
    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

    // La méthode __toString permet à un d'appeler directment objet de classe et de décider comment il doit réagir
    public function __toString() {
        return $this->prenom . " " . $this->nom;
    }

    // Création d'une méthode pour afficher la bibliographie
    public function afficherBiblioagraphie() {
        $result = "<h2>Livre de " . $this . " " . "</h2>";

        foreach($this->livres as $livre) {
            $result .= $livre ."<br>";
        }

        return $result;

    
        
    }
}






