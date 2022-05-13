<?php
class Inscrire extends Model {
   // Attributs Navigationnel=Attributs issus des relations ou associations 
    // relation ManyToOne entre AC et Inscrire avec un AC
    private int $id;
     public function __construct(){
        self::$table='inscrire';
         
    }
    public function ac():AC{
        $sql="select p.* from inscrire i,personne
        p where p.id=i.ac_id
        and p.role like 'ROLE_AC'
        and i.id=".$this->id;
        return new AC();

    }
    // relation ManyToOne entre Annee et Inscrire avec une Annee
    public function annee():AnneeScolaire{
        $sql="select a.* from annee_scolaire a,inscrire
        i where a.id=i.annee_id
        and i.id=".$this->id;
        return new AnneeScolaire();

    }

}