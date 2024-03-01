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

// Cette commande sert à charger les classes présentes dans un autre script
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Instanciation d'objet Auteur
$a1 = new Auteur("Stephen", "King");

// Instanciation d'objet Livre
$l1 = new Livre($a1, "Ca", "1986", "1138", 20);
$l2 = new Livre($a1, "Simetierre", "1983", "374", 15);
$l3 = new Livre($a1, "Le Fléau", "1978", "823", 14);
$l4 = new Livre($a1, "Shining", "1977", "447", 16);

