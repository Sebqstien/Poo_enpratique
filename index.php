<?php

// interface Travailleur
// {
//   public function travailler();
// }

abstract class Humain
{
  public $nom;
  public $prenom;
  public $age;

  public function __construct($nom, $prenom, $age)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age = $age;
  }

  abstract public function travailler();
}


class Employe extends Humain
{

  public function travailler()
  {
    return "Je suis un employe et je travailles";
  }


  public function presentation()
  {
    var_dump("Bonjour je suis $this->prenom $this->nom et j'ai $this->age ans");
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAge($age)
  {
    if (is_int($age) && $age > 1 && $age <= 120) {
      $this->age = $age;
    } else {
      throw new Exception("L'age de l'employe doit etre entre 1 et 120");
    }
  }
}

$employe1 = new Employe("Bismila", "Bebert", 33);
$employe2 = new Employe("John", "Doe", 23);


$employe1->presentation();
$employe2->presentation();



//Heritage


class Patron extends Employe
{
  public $voiture;

  public function __construct($nom, $prenom, $age, $voiture)
  {
    parent::__construct($prenom, $nom, $age);
    $this->voiture = $voiture;
  }

  public function presentation()
  {
    var_dump("hello je suis $this->prenom $this->nom et j'ai $this->age ans et j'ai une $this->voiture");
  }


  // public function rouler()
  // {
  //   var_dump("Hello, je roule en $this->voiture");
  // }
}

class Etudiant extends Humain
{
  public function travailler()
  {
    return "Je suis un etudiant et je travailles";
  }
}


// $patron = new Patron("Durand", "Joseph", 50, "Mercedes");
// $patron->presentation();


// //INTERFACES et les classes abstraites


// function faireTravailler($objet)
// {
//   var_dump("travail en cours: {$objet->travailler()}");
// }

// faireTravailler($patron);


// $etudiant = new Etudiant;

// faireTravailler($etudiant);


