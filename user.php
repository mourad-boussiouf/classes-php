<?php
class User
{
  // Attributs
private $id;
public $login;
public $email;
public $password;
public $firstname;
public $lastname;
public $bdd;
}

  // Methods
  function __construct() {
    $this->id = $id;
    $this->login = $login; 
    $this->email = $email; 
    $this->firstname = $firstname; 
    $this->lastname = $lastname;
  }

  function register($login, $password, $email, $firstname, $lastname ) {

    return $this->name;
    $query = "INSERT INTO utilisateurs (login,password,email,firstname,lastname) VALUES ('$login','$password','$email', '$firstname','$lastname')";

  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}


?>