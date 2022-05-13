<?php
interface IModel{
    /*Ses methodes sont abstraites cad elles n'ont pas de corps
    elle repond a la question Quoi
    */
    // Methodes D'instances
    public function update():int;
    public function insert():int;

    // public function delete():int;
    
        //Methodes Static

    public static function delete(int $id):int;
    public static function findAll():array;
    public static function findById(int $id):object|null;
    // public static function insert(array $data):int;

    public static function findBy(string $sql,array $data=null, $single=false):object|null|array; 
    //toutes les requetes qui ne sont de select*from ou where id ex:Select * from peesonne where nom_complet like 'diop'






}
//Methodes Static
//Class::methode()->pour appeler la methode
// Methode D'instances on a toujours besoin de ses etats cad attributs  
/*$obj=new Class
$obj->methode()
*/
/*
 $obj=new Classe();
 $obj->setId(1)
 $obj->setLibelle('classe 1)
 $obj->update() //update from classe set libelle='classe 1' where id=1 
 */
/*
 $obj=new Classe();
 $obj->setId(1)
 $obj->delete() //delete from classe  where id=1 
 on peut le transformer en methode static
 Classe::methode()
 Classe::delete($id)//delete from classe  where id=1 

 */
// Classe::findAll()//select * from classe  
/*

 Classe::insert(["classe 1","niveau","filiere"])
    // insert into classe (libelle,niveau,filiere) values("classe 1,niveau,filiere")
  */ 