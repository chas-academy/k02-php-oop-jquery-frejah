        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        
<?php
// $tweets = [
//     [
//         'tweetSubject' => 'List-based media object',
//         'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
//     ],
//     [
//         'tweetSubject' => 'List-based media object',
//         'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
//     ],
//     [
//         'tweetSubject' => 'List-based media object',
//         'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
//     ]
// ];
?>

 <!-- <ul> -->

<?php
// foreach($tweets as $tweet)
// {
?>
<!-- <li><?
// =$tweet['tweetSubject']
?></li> -->
<?php
// }
?>
<!-- </ul> -->

<?php

$testString = "Leif";

$testArray = [
    [
        "username" => "Leif",
        "description" => "Kind feller",
        "title" => "Sockerkaka",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        "image" => "<img src=\"images/lama.jpg\" id=\"profile-image\" alt=\"Profile image\" />"
    ],
    [
        "username" => "Todd",
        "description" => "Kind feller",
        "title" => "Kanelbulle",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        "image" => "<img src=\"images/lama.jpg\" id=\"profile-image\" alt=\"Profile image\" />"
    ],
    [
        "username" => "Kurt",
        "description" => "Kind feller",
        "title" => "Donut",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        "image" => "<img src=\"images/lama.jpg\" id=\"profile-image\" alt=\"Profile image\" />"
    ],
    [
        "username" => "Leif",
        "description" => "Kind feller",
        "title" => "Prinsesstårta",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        "image" => "<img src=\"images/lama.jpg\" id=\"profile-image\" alt=\"Profile image\" />"
    ],
];

// Echo out with FOR LOOP

// for ($i = 0; $i < count($testArray); $i++) {
//     echo $testArray[$i]['username'] . '<br />';
//     echo $testArray[$i]['description'] . '<br />';
//     echo $testArray[$i]['title'] . '<br />';
//     echo $testArray[$i]['body'] . '<br />';
//     echo $testArray[$i]['image'] . '<br />';
// }

// Echo out with FOR LOOP AND IF/ELSE
// for ($i = 0; $i < count($testArray); $i++) {

//     if ($testArray[$i]['username'] == ($testString)) {
//         echo ("Welcome " . $testString . "! <br />");
//         } else {
//             echo ("The user does not exist <br />");
//         }
// }

// Echo out with FOREACH LOOP

//  foreach ($testArray as $value)
//  {
//     echo "<div class=\"list-container\">
//     <li class=\"media\"> 
//     <p>{$value['username']}</p>
//     <p>{$value['description']}</p>
//     <p>{$value['title']}</p>
//     <p>{$value['body']}</p>
//     <p>{$value['image']}</p>
//     </li>
//     </div>";
//  }


 foreach ($testArray as $value)
 {
    echo "<div class=\"list-container\">
    <li class=\"media\"> 
    <p>{$value['username']}</p>
    <p>{$value['description']}</p>
    <p>{$value['title']}</p>
    <p>{$value['body']}</p>
    <p>{$value['image']}</p>
    </li>
    </div>";
 }
 
 ?>

