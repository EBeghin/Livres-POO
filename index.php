<h1>Livres</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et 
leurs auteurs respectifs.</p>

<h2>Résultats</h2>


<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$auteur1 = new Auteur("Stephen","King");
$livre1 = new Livre("Ca","1986","1138","20",$auteur1);
$livre2 = new Livre("Simetierre","1983","374","15",$auteur1);
$livre3 = new Livre("Le fléau","1978","823","14",$auteur1);
$livre4 = new Livre("Shining","1977","447","16",$auteur1);

$auteur2 = new Auteur("Aldous","Huxley");
$livre5 = new Livre("Le meilleur des mondes","1931","285","12",$auteur2);
$livre6 = new Livre("Les portes de la perception","1956","264","9",$auteur2);


$auteur1->afficherBibliographie();
$auteur2->afficherBibliographie();