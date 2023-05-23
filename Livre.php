<?php

class Livre {
    private string $titre;
    private string $anneeParution;
    private int $nbPages;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, string $anneeParution, int $nbPages, float $prix, Auteur $auteur){
        $this->titre = $titre;
        $this->anneeParution = $anneeParution;
        $this->nbPages = $nbPages;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->ajouterLivre($this);
    }

    public function __toString() {
        return $this->titre. " (".$this->anneeParution.") : ".$this->nbPages. " pages / ".$this->prix. " €<br>";
    }


    public function getTitre() {
        return $this->titre;
    }

    public function setTitre(string $titre) {
        $this->titre = $titre;
        return $this;
    }

    public function getNbPages() {
        return $this->nbPages;
    }

    public function setNbPages(int $nbPages) {
        $this->nbPages = $nbPages;
        return $this;
    }

    public function getAnneeParution() {
        return $this->anneeParution;
    }

    public function setAnneeParution(string $anneeParution) {
        $this->anneeParution = $anneeParution;
        return $this;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setPrix(float $prix) {
        $this->prix = $prix;
        return $this;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur) {
        $this->auteur = $auteur;
        return $this;
    }
}