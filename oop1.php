<?php

class user {
    public $name;

    public function marhba(){
        return "Affin Assi " . $this->name;
        
    }
}

$user = new user();
$user->name = "Joseph";
$userlast = new user();
$userlast->name = "hhhh";


echo $user->marhba();
echo $userlast->marhba();
?>


<!-- Polymorphism (same method, different behavior)
class User {
    public function role() {
        return "user";
    }
}

class Admin extends User {
    public function role() {
        return "admin";
    }
} -->


<!-- Abstraction (force structure)
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
} -->