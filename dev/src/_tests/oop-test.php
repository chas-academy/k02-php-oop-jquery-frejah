<?php

// class User {
//     public $age = 0;

//     public function __construct($age) {
//     // "this" referes to this class.
//         $this->age = $age;
//     }

//     public function getAge() {
//         echo 'Age: ' . $this->age . "<br>";
//     }
// }

// $freja = new User(30);
// $freja->getAge();

// $magnus = new User(23);
// $magnus->getAge();

// if($freja->age == $magnus->age) {
//     echo "Same age";
// } else if($freja->age < $magnus->age) {
//     echo "Freja is younger";
// } else {
//     echo "Freja is older";
// }

// for ($i = 1; $i <10; $i++) {
//     echo $i . '<br>';
// }


//Exempel paginering

// $totalItems = 210;
// $itemsPerPage = 25;

// Ceil avrundar uppåt till ett jämt nummer. Motsatsen är floor.
// $pageCount = ceil($totalItems / $itemsPerPage);


// For loop för att generera länkarna som folk ska kunna klicka på. 
    // i = står för increment.

// If - statement säger att pageCount inte behöver skrivas ut om värdet är mindre än 1 (en sida).
// if ($pageCount > 1) {
//     for ($i = 1; $i <= $pageCount; $i++) {
//         echo '<a href="?page=' . $i . '">' . $i . '</a> ';
//     }
// }

// Loop through an array (start with index 0). Ha variabler som "tak" eftersom ett värde ex < 10 kan ändras i arrayer, därför är count smidigt.

// $dogs = ['doxie', 'aussie', 'retriver', 'beagle'];

// for ($i = 0; $i < count($dogs); $i++) {
//     echo $dogs[$i], '<br>';

// }

// $numberIwant = 5;

// while (($diceRoll = rand (1,6)) !== $numberIwant) {
//     echo "You rolled a {$diceRoll}, we need a {$numberIwant} <br>";
// }
//     echo "You rolled a {$numberIwant}!";

// $colors = ['red', 'brown', 'orange'];

// foreach ($colors as $index => $color) {
//     echo $index, " : ", $color, '<br>';
// }

// Det här kan man kanske använda när man ska hämta information från en databas

// $topics = [
//     [
//         'id' => 1,
//         'title' => 'The best way to learn PHP?',
//         'posts' => [
//             ['body' => 'Practice a lot!'],
//             ['body' => 'Work on a project.'],
//         ]
//     ],
//     [
//         'id' => 2,
//         'title' => 'How do I use a foreach loop?',
//         'posts' => [
//             ['body' => 'Just watch this part.'],
//         ]
//     ],
// ];

// // Alltid plural och singular
// foreach ($topics as $topic) {
//     echo '<h1>' . $topic['title'] . '</h1>';
// // En foreach loop inuti den andra loopen för post. Letar i topic[posts] och post istället för topics topic!.
// foreach ($topic['posts'] as $post) {
//     echo '<p>' . $post['body'] . '</p>';
//     }
// }

// FUNCTIONS

// function fullName($firstName, $lastName) {
//     return "{$firstName} {$lastName}";
// }

// $firstName = 'Freja';
// $lastName = 'Hillsröm';

// $fullName = fullName($firstName, $lastName);

// echo $fullName;

// ASSIGN A FUNCTION TO A VARIABLE

// $fullName = function ($firstName, $lastName, $seperator = ' ') {
//     return "{$firstName}{$seperator}{$lastName}";
// };

// echo $fullName('Freja', 'Hillström');

//Enbart funktioner som inte är stoppade i variabel som kan anropas/skrivas ut innan den är skriven (se ordningen nedan).

// echo fullBreed('Icelandic', 'Sheepdog');

// function fullBreed($landOfDog, $typeOfDog)
// {
//     return "{$landOfDog} {$typeOfDog}";
// }

// func_get_args = Använd i funktioner ger en array ger oss alla argument som stoppats in. 

// function add() {
    
//     $total = 0;

//     foreach (func_get_args() as $number) {
//     // is_numeric gör så att det garanterat måste vara en siffra och inte exempelvis '1freja' skulle fungera.
//         if (!is_numeric($number)) {
//             continue;
//         }

//         $total += $number;
//     }

//     return $total;
// }

// echo add(5, 10, 10, '7freja');

// function add() {
//     return array_sum(func_get_args());
// }

// echo add(5, 10, 10);

// SCOPRES - Synligheten av Variabler på olika ställen.
 //Funktioner har sina egna scopes.
    // Använd "global" eller "use" för access mellan i och utanför funktionen.

// USE

//  $config = [
//      'seperator' => ' '
//  ];

//  $fullName = function ($firstName, $lastName) use ($config) {
//      return "($firstName}{$config['seperator']}{$lastName}";
//  };

//  echo $fullName('Hrafna', 'Flóki');

 // GLOBAL

// $config = [
//     'seperator' => ' '
// ];

// $fullName = function ($firstName, $lastName) {
//     global $config;

//     return "{$firstName}{$config['seperator']}{$lastName}";
// };

// echo $fullName('Bobby', 'Bird');









