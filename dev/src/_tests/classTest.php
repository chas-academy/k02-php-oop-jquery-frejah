<?php

// class MyClass {
    // Class properties and Methods goes here.
// // Property
// public $prop1 = "I'm a class property";
// }

// After creating the class, a new class can be instantiated and stored in a variable using the new keyword.
// $obj = new MyClass;

// To see the contents of the class, use var_dump():
// var_dump($obj);

// To read this property and output it to the browser, reference the object from which to read and the property to be read:
// echo $obj->prop1;

// Because multiple instances of a class can exist, if the individual object is not referenced, the script would be unable to determine which object to read from. The use of the arrow (->) is an OOP construct that accesses the contained properties and methods of a given object.


// Methods are class-specific functions. Individual actions that an object will be able to perform are defined within the class as methods.

//For instance, to create methods that would set and get the value of the class property $prop1, add the following to your code:

// class MyClass {

//     public $prop1 = "I'm a class property!";

//     public function setProperty($newval) {
//         return $this->prop1 = $newval;
//     }

//     public function getProperty() {
//         return $this->prop1 . "<br />";
//     }
// }

// $obj = new MyClass;

// echo $obj->getProperty(); // Get the property value.

// $obj->setProperty("I'm a new property value!"); // Set a new one.

// echo $obj->getProperty(); // Read it out again to show the change.

// Note — OOP allows objects to reference themselves using $this. When working within a method, use $this in the same way you would use the object name outside the class.
// To use these methods, call them just like regular functions, but first, reference the object they belong to.

// "The power of OOP becomes apparent when using multiple instances of the same class."

class MyClass {

    public $prop1 = "I'm a class property";

    public function __construct()
    {
        echo 'The class "', __CLASS__, '" was initiated!<br />';
    }

    // construct that will output a message whenever a new instance of the class is created.
    // Note — __CLASS__ returns the name of the class in which it is called

    public function setProperty($newval) {
        $this->prop1 = $newval;
    }

    public function getProperty() {
        return $this->prop1 . "<br />";
    }
}

// Create two objects
$obj = new MyClass;
$obj2 = new MyClass;

// Get the value of $prop1 from both objects
echo $obj->getProperty();
echo $obj2->getProperty();

// Set new values for both objects
$obj->setProperty("I'm a new property value!");
$obj2->setProperty("I belong to the second instance!");

//Output both objects' $prop1 value
echo $obj->getProperty();
echo $obj2->getProperty();


