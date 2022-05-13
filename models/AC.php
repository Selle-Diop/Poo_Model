<?php
class AC extends User{
// Attributs Navigationnel=Attributs issus des relations ou associations
    // relation OneToMany entre AC et Inscrire =>Plusiueurs Inscriptions
// 1ere Methode 
    private array $inscriptions;

  // 2eme Methode  
  // Fonctions Navigationnelles=Fonctions issues des relations ou associations 
  public function inscriptions():array{
      return [];
  }
    public function __construct()
    {
        self::$role='ROLE_AC';
        $this->inscriptions=[];

    }

}