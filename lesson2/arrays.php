<?php
// Creating an indexed array
$fruits = array("apple", "banana", "orange");

// Accessing array elements
echo $fruits[0];  // Outputs: apple

// Adding an element to the array
$fruits[] = "grape";  // Now the array contains: apple, banana, orange, grape

// Associative arrays (key-value pairs)
$student = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 20
);

echo $student["first_name"];  // Outputs: John

class Car
{
    public $brand;  // Property to store the car's brand
    public $model;  // Property to store the car's model

    public function startEngine()
    {
        echo "Engine started!";  // Method to start the car's engine
    }
}

$myCar = new Car();  // Creating an instance of the Car class
$myCar->brand = "Toyota";  // Setting the brand property of the car
$myCar->model = "Corolla";  // Setting the model property of the car
$myCar->startEngine();  // Calling the startEngine method of the car object
// Outputs: Engine started!


class Animal
{
    public $species; // Property to store the species of the animal

    public function makeSound()
    {
        echo "Some sound"; // Method to make a generic animal sound
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Woof!"; // Method to make a dog-specific sound
    }
}

$dog = new Dog(); // Creating an instance of the Dog class
$dog->species = "Canine"; // Setting the species property of the dog
$dog->makeSound();  // Calling the makeSound method of the dog object
// Outputs: Woof!
