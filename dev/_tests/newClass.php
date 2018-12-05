<?php

class NewClass {

    // Properties and Methods goes here. Simmilar to variables and functions, But Methods and Properties are class specific functions. - Only going to to anything regarding the class itself.
    public $data = "I am a property";
    public $error = "This is the class called NewClass";

    //Construct
    //Will allways run first, as soon as the class is called.
    public function __construct() {
        echo "This class has been instansiated <br>";
    }

    //toString
    public function __toString() {
        echo "toString method: ";
    }

    //Function/method (related to the class).
    public function setNewProperty($newdata) {
        $this->data = $newdata;
    }

    public function getProperty() {
        return $this->data;
    }

    //Destruct Method - Code inside here will run as soon as this class stops running.
    // An example would be if we wanted to open up a database connection in the constructor, and close the connection in the destructor.
    public function __destruct() {
        echo "<br> This is the end of the class";
    }
}



/// OOP - CLASSES - Public - Protected - Private ///

// class NewClass extends ParentClass {
 // When extending another class all its methods and properties in that class gets available as long as it is Public or Protected.
    // Method:
    
    // public function name() {
    // This means we access some kind of information inside this class (counts as both classes - since we combine them by extends).
        // return $this->name;
    // Return name from parentClass. Since we are exstanding that class and it is protected.
//     }

// }

// Instantiate a class (Some kind of object that contains all the information about the class). Makes it possible to access all information inside the class, when doing "new newClass". //

// $object = new NewClass;

// var_dump($object);

/// Scopes ///

// Public - Can get accessed anywhere inside the code.

// Protected - Can only get accessed by classes extended by its class.

// Private - Can only be used in its own Class.