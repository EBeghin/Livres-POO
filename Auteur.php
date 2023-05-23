<?php

class Auteur {
    private string $prenom;
    private string $nom;
    private array $livres;

    public function __construct(string $prenom, string $nom) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->livres = [];
    }

    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

    public function afficherBibliographie() {
        echo "<h3>Livres de " . $this . "<br></h3>"; //récupère le toString (de cet objet)
        $result = "";
        foreach ($this->livres as $livre) {
                $result .= $livre; //récupère le toString de $livre
        }
        echo $result;
    }

    public function __toString() {
        return $this->getPrenom(). " " .$this->getNom();
    }

    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }
    
    public function getNom() {
        return $this->nom;
    }
    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function getLivres() {
        return $this->livres;
    }
    public function setLivres(array $livres) {
        $this->livres = $livres;
    }
}