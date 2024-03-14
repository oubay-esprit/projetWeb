<?php
class Employe{
private $lastName;
private $firstName;
private $password;
private $phone;
private $email;
private $dOB;

public function getLastname()
{
    return $this->lastName;
}
public function setLastname($a) 
{
     $this->lastName=$a;
}
public function getFirstname()
{
    return $this->firstName;
}
public function setFirstname($a)
{
     $this->firstName=$a;
}
public function getPassword()
{
    return $this->password;
}
public function setPassword($a)
{
     $this->password=$a;
}

public function getPhone()
{
    return $this->phone;
}
public function setPhone($a)
{
     $this->phone=$a;
}

public function getEmail()
{
    return $this->email;
}
public function setEmail($a)
{
     $this->email=$a;
}

public function getDOB()
{
    return $this->dOB;
}
public function setDOB($a)
{
     $this->dOB=$a;
}
public function __construct($a,$b,$c,$d,$e,$f)
{
    $this->firstName="$a";
    $this->lastName="$b";
    $this->password="$c";
    $this->phone="$d";
    $this->email="$e";
    $this->dOB="$f";
}
public function Afficher()
{
    echo "nom:" .$this->firstName;
    echo "prenom:" .$this->lastName;
    echo "password:" .$this->password;

}

}
// $personne1=new Employe("Doe","Jane","123","2222","jane.Doe@gmail.com","1/1/2000");
// $personne1->Afficher();

?>