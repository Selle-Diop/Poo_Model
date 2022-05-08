<?php
class Personne {
    // attributs instances:Ils sont crés specifiquement pour chaque objet de la classe
    public int $id;
    private string $nomComplet;
    // attributs classes ou statiques:Ils sont general a l'ensemble des objets
    private static int  $nombrePersonne;

    // Constructeur:Permet de creer un objet
    public function __construct(){
         
    }
}