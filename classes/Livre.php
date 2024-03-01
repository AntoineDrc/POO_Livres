

<?php

// Création d'une classe Livre
class Livre {
    private string $titre;
    private string $nbPage;
    private DateTime $anneeParution;
    private int $prix;
    private Auteur $auteur;
    private array $livres;

    // Constructeur de la classe livre
    public function __construct(Auteur $auteur, string $titre, string $anneeParution, string $nbPage, int $prix) {
        $this->titre = $titre;
        $this->nbPage = $nbPage;
        $this->anneeParution = new DateTime($anneeParution);
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->ajouterLivre($this);
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
    
    // La méthode __toString permet à un d'appeler directment objet de classe et de décider comment il doit réagir
    public function __toString() {
        return "Le titre du livre est : \"" . $this->titre . "\", il à été écrit par " . $this->auteur->getPrenom() . " " . $this->auteur->getNom() . " et il est paru en " . $this->anneeParution->format("Y");
    }

}