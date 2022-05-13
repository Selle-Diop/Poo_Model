<?php
/* class Final :est une classe qui ne peut pas avoir de fille cad il ne peut pas avoir une relation de spacialisation */

 abstract class Personne extends Model  {
    /* attributs instances:Ils sont crés specifiquement pour chaque objet de la classe*/

    protected int $id;
    protected string $nomComplet;
    protected static string $role;
    /*attributs classes ou statiques:Ils sont general a l'ensemble des objets c'est un comportement par rapport a une classe*/
    private static int  $nombrePersonne;

    // Constructeur:Permet de creer un objet
    public function __construct(){
        self::$table='personne';
         
    }
    /* Getters:ceux sont des methodes public qui permettent d'acceder a l'interface des attributs
    privés ou protected  d'une classe*/

    public function getId():int{
        return $this->id;
    }
    public function getnomComplet():string{
        return $this->nomComplet;
    }
    /* Setters:ceux sont des methodes public qui permettent de modifier les attributs
    privés ou protected de l'interface d'une classe*/
    public function setId(int $id):self{
         $this->id=$id;
         return $this;
    }

public function setnomComplet(string $nomComplet):self{
         $this->nomComplet=$nomComplet;
          return $this;

    }
    // Pour les attributs static
    public static function getNombrePersonne():int{
        // :: :operateur de portée de classe
        return self::$nombrePersonne;
         
    }
     public static function setNombrePersonne(int $nombrePersonne):void{
        // :: :operateur de portée de classe
        self::$nombrePersonne=$nombrePersonne;
         
    }
    //  Redifinition d'une methode cad il a modifie la methode
     public static function findAll():array{
         $sql="select * from personne where role like '".self::$role."'";
         return [];

    }


}