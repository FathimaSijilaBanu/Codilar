<?php   
interface Mammal
{
    public function eat();
    public function sleep();
}
abstract class Human implements Mammal
{
    protected $name;
    protected $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function eat() {
        echo $this->name . " is eating.\n" ;
    }
    
    abstract public function sleep();
    abstract public function play();
}

class Adult extends Human {
    public function sleep() {
        echo $this->name . " is sleeping at night.\n";
    }
    
    public function play() {
        echo $this->name . " is playing chess.\n";
    }
}

class Child extends Human {
    public function sleep() {
        echo $this->name . " is taking a nap in the afternoon\.n";
    }
    
    public function play() {
        echo $this->name . " is playing with dolls.\n";
    }
}
$adult = new Adult("Sijila", 24);
$child = new Child("Nizu", 5);
$adult->eat();
$adult->sleep();
$adult->play();
$child->eat();
$child->sleep();
$child->play();
?>
