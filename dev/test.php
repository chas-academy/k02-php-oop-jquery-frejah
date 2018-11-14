<?php

//arrays

// $users = [
//     [
//         'username' => 'alex',
//         'email' => 'alex@codecourse.com',
//         'likes' => ['cats', 'food']
//     ],

//     [
//         'username' => 'billy',
//         'email' => 'billy@codecourse.com',
//         'likes' => ['books', 'cats']
//     ],

// ];

// $users[] =   [
//     'username' => 'josh',
//     'email' => 'josh@codecourse.com',
//     'likes' => ['reading', 'cooking']
// ];


// foreach ($users as $user) {
//     echo $user['username'] . '<br>';
// }

// echo $users[0]['likes'][0];

// ändra listpunkt i en array
// $users[1]['likes'][1] = 'dogs';
// lägg till kategori rad
// $users[1]['about'] = 'I am learning to code';

// echo '<pre>', var_dump($users), '</pre>';



// null - represents  a variable with no value. Unset or has the value null. User for example when you dont know the value yet.

// $name = null;

// unset($name);

// var_dump($name);

// $weather = 'sunny';
// $degrees = 30;

//string concatination
// $status = 'The current weather is ' . $weather . ' and it\'s ' . $degrees . ' degrees';

// echo $status;

// var_dump($status);

//variable passing - works with just double quotes
// $status = "The current weather is $weather and it's $degrees degrees";
//use curly braces around the variable name to tell the program where the variables ends.
// $status = "The current weather is {$weather} and it's {$degrees} degrees";

// echo $status;


// $dayOfWeek = 6;

// if ($dayOfWeek == 1) {
//     echo 'It is Monday.';
// } elseif ($dayOfWeek == 2) {
//     echo 'It is Tuesday.';
// } elseif ($dayOfWeek == 3) {
//     echo 'It is Wednesday.';
// } else {
//     echo 'That is not a valid day.';
// }

//Shorter way to write it

// $dayOfWeek = 4;

// $daysOfWeek = [
//     1 => 'Monday',
//     2 => 'Tuesday',
//     3 => 'Wednesday'
// ];


// if (in_array($dayOfWeek, array_keys($daysOfWeek))) {
//     echo $daysOfWeek[$dayOfWeek];
// } else {
//     echo 'That is not a valid day.';
// }

// Nesting

// $name = 'Freja';

// if ($name) {
//     echo 'Your name is ' .$name;
// }

//     if (strlen($name) > 10) {
//         echo '. Oh, and you have a very long name.';
//     }

// Inversion operator 

$name = 'Freja Joanna Mimosa Elisabeth';

if(!$name) {
    return;
}

echo 'Your name is ' .$name .'.';

if (strlen($name) > 10) {
    echo ' Oh, and you have a long name.';

}

?>