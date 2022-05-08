<?php
// inclure le fichier de la classe pour la creation d'objet
require_once("../model/Personne.php");

//creer objet:Un objet c'est une instance de la classe ou la variabl de la classe

$Pesr1 = new Personne ();//Cette instance fait appel a une methode par defaut qui est le Constructeur

// Donner un etat a un objet:c'est de donner la valeur de ces attributs
// ->: signifie l'operateur de portée de l'instance ou objet 

/* $Pers1->:signifie une demande de l'interface de la classe(interface:c'est tous
les attributs et methodes publics de la classe)*/
$Pers1->id