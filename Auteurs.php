<h1>Exercice livres</h1>

<p>
Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et 
leurs auteurs respectifs.
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un 
auteur. Un auteur comporte un nom et un prénom.
Une méthode toString() sera appréciée dans chacune de vos classes.
Vous implémenterez une méthode afficherBibliographie() qui permettra d'afficher la bibliographie 
complète d'un auteur :
</p>

<h2>Résultat</h2>

<?php

// Création d'un classe Auteur
class Auteur {
    private string $nom;
    private string $prenom;


    // Constructeur de la classe Auteur
    public function __construct(string $nom, string $prenom) {
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
}