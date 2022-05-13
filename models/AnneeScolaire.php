<?php
class AnneeScolaire extends Model{
    // OneToMany=>relation entre annee et inscription
    public function inscriptions():array{
        return [];
    }
    public function __construct(){
        self::$table='annee_scolaire';
         
    }
}