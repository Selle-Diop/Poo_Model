<?php
class Classe extends Model{
    private int $id;
    private string $libelle;
    private string $filiere;
    private string $niveau;
    // ManyToMany =>entre classe et professeur
public function professeurs():array{
    return [];
}
public function __construct(){
        self::$table='classe';
         
    }



}