<?php

class User {
    // properties
    public $name;
    public $email;

    // class func method
    public function login() {
        echo $this->name . ' User logged in.. ';
    }

    // constructor
    public function __construct($name, $email)
    {
        // echo 'I ran... ';
        $this->name = $name;
        $this->email = $email;

    }
}

// instantiate a new object
$user1 = new User($name, $email);

// $user1->name = 'Pteer';
// $user1->email = 'pteer@gmail.com';

// using the constructor function
$user1 = new User('Aaron', 'aaron@mail.com');

$user2 = new User('Pteer', 'pteer@mail.com');
$user2->login();


$user1->login();



var_dump($user2);