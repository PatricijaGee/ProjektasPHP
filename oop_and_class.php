<?php

/*
From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    //properties are attributes that belong to a class

    //Access Modifirs: public, private, protected
    //public - can be accessed from anywhere
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    //costructor is a method that runs when an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //Method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

// instantiate a user object

$user1 = new User('Blonk', 'blonk.badonk@bing.com', 'hjbdhw');
$user2 = new User('Glunk', 'glunkoutofhighschool@yahoo.com', 'ljandaksnkd');

//echo $user1->email;
//echo $user2->name;

//$user1->set_name('Blonk');
//$user2->set_name('Glunk');

//echo $user1->get_name();
//echo $user2->get_name();

//$user1->name = 'Blonk';

//var_dump($user2);

//echo $user1->name;

//inheritance

class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '1234', 'Manager');

echo $employee1->get_title();