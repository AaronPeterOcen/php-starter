<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}


class Admin extends User {
  public $level;


  public function __construct($name, $email, $level) {
    $this->level = $level;
    parent::__construct($name, $email);
  } 

  public function login() {
    echo 'Admin'. $this->name . 'logged in <br>';
  }

  // getter
  public function getStatus()
  {
    echo $this->status;
  }
}

$admin0 = new Admin('Peter Aaron.', 'aaron@mail.com', 4);

// echo $admin0->name . ' <br>';
// echo $admin0->email . ' <br>';
// echo $admin0->level . ' <br>';

$admin0->getStatus();

$admin0->login();

