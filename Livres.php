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

// Création d'une classe Livre
class Livres {
    private string $titre;
    private string $nbPage;
    private DateTime $anneeParution;
    private int $prix;
    private string $auteur;

    // Constructeur de la classe livre
    public function __construct(string $titre, string $nbPage, string $anneeParution, int $prix, string $auteur) {
        $this->titre = $titre;
        $this->nbPage = $nbPage;
        $this->anneeParution = new DateTime($anneeParution);
        $this->prix = $prix;
        $this->auteur = $auteur;
    }

    // Création des getters / setters

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbPage()
    {
        return $this->nbPage;
    }

    public function setNbPage($nbPage)
    {
        $this->nbPage = $nbPage;

        return $this;
    }

    public function getAnneeParution()
    {
        return $this->anneeParution;
    }

    public function setAnneeParution($anneeParution)
    {
        $this->anneeParution = $anneeParution;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }
}