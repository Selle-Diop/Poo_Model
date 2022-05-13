<?php
class Professeur extends Personne{

// ManyToMany =>entre classe et professeur
public function classes():array{
    return [];
}
public function __construct()
    {
        $this->role='ROLE_AC';
        $this->inscriptions=[];


    }
    // Dans les tables on aura tjrs au minimun ces requetes
    // Insert()
    // Update()
    // Delete()
    // selectAll()
    // selectById()

}