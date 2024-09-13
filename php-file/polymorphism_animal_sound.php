<?php

class Animal
{
    public function makeSound()
    {
        return "Hmmm";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        return "Woof";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        return "Meow";
    }
}

$dog = new Dog();
echo "Dog say" . $dog->makeSound();

echo "<br/>";

$cat = new Cat();
echo "Cat say" . $cat->makeSound();
