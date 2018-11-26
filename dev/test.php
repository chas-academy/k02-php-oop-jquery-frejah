// <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu" />

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

// $name = 'Freja Joanna Mimosa Elisabeth';

// if(!$name) {
//     return;
// }

// echo 'Your name is ' .$name .'.';

// if (strlen($name) > 10) {
//     echo ' Oh, and you have a long name.';

// }

//Logical operators

// And &&

// $username = 'alex';
// $password = 'ilovecats';

// if ($username ==  'alex' && $password == 'ilovecats') {
//     echo 'You are in!';
// }

// Or ||

// $dayOfWeek = 7;

// if ($dayOfWeek == 6 || $dayOfWeek == 7) {
//     echo 'The weekend is here!';
// }

// $dayOfWeek = 6;
// $workingTheWeekend = false;
//Put the statementyou want to run first inside of paranteses.

// if (($dayOfWeek == 6 || $dayOfWeek == 7) && !$workingTheWeekend) {
//     echo 'You have a day off!';
// }

//Comparison operators

// If you use 2 == 1 can also be a truthy value. But with 3 === it needs to be an exact comparison.

// $uploaded = true;

// if ($uploaded === true) {
//     echo 'Uploaded';
// }

// $tablesAvailable = false;

// if ($tablesAvailable !== true) {
//     echo 'No tables available.';
// }

// $roomsRequested = 2;
// $roomsAvailable = 3;

// if ($roomsRequested >= $roomsAvailable) {
//     echo 'Sorry, not enough rooms.';
// }

// $maxRoomsAllowed = 5;
// $roomsRequested = 2;
// $roomsAvailable = 20;

// if (($roomsRequested >= $roomsAvailable) || ($roomsRequested >= $maxRoomsAllowed)) {
//     echo 'Please choose less rooms.';
// } else {
//     echo 'Your booking is complete';
// }

// Switch

// switch (2) {
//     case 1:
//         echo 'The value is one';
//         break;
//     case 2:
//         echo 'The value is two';
//         break;
//     default:
//         echo 'The value is unknown';
//         break;
// }

// $weather = 'sunny';
// $color = null;

// switch (true) {
//     case $weather == 'sunny':
//          $color = 'blue';
//         break;
//     case $weather == 'cloudy':
//          $color = 'grey';
//         break;
// }

// echo $color;

//Basic arithmetic

// $views = 0;

// $views++;

// echo $views;

// $totalLessons = 30;
// $completedLessons = 7;

// $percentageComplete = number_format(($completedLessons / $totalLessons) * 100);
// //number_format = Round the number down without decimals.

// echo "You've completed {$percentageComplete}% of this course!";

// $balance = 500;
// $cost = 25;

// $balance = $balance - $cost;

// echo $balance;

// $rows = 10;

// for ($row = 1; $row <= $rows; $row++) {
//     if ($row % 2 === 0) {
//         echo 'Even';
//     } else {
//         echo 'Odd';
//     }
// }

//The FOR loop

// for ($x = 1; $x <= 10; $x++) {
//     echo $x . '<br>';
// }

//Ceil runder upp till högsta heltal, floor till minsta.
// Pagination exempel på FOR loop användning

// $totalItems = 210;
// $itemsPerPage = 25;

// $pageCount = ceil($totalItems / $itemsPerPage);

// for ($i = 1; $i <= $pageCount; $i++) {
//     echo '<a href="?page' . $i . '">' . $i . '</a> ';
// }

// $names = ['alex', 'billy', 'dale'];

// for ($i = 0; $i < count($names); $i++) {
//     echo $names[$i], '<br>';
// }

// The WHILE and DO WHILE loops

// $currentNumber = 1;
// $endAt = 10;
// $incrementBy = 1;

// while ($currentNumber <= $endAt) {
//     echo $currentNumber, '<br>';
//     $currentNumber += $incrementBy;
// }

// $j = 0;
// $wantedMan = "fimpen";
// $thegang = ['sulan', 'fimpen', 'bulten', 'släggan', 'foten'];

// echo "Random gang membah: ", $thegang[rand(0, count($thegang) - 1)], "<br>";

// while($j < count($thegang)) {
//     if($thegang[$j] == $wantedMan) {
//         echo $wantedMan, ' is in the gang';
//     }

//     $j++;
// }

// $numberIwant = 3;

// while (($diceRoll = rand(1, 6)) !== $numberIwant) {
//     echo "You rolled a {$diceRoll}, we need a {$numberIwant}<br>";
// }

// echo "You rolled a {$numberIwant}!";

// do {
//     echo 'This will be run at least once.';
// } while (false);

// $names = ['alex', 'billy', 'dale'];

// for ($i = 0; $i < count($names); $i++)
//     echo $names[$i], '<br>';


// Lättare och bättre version med FOREACH loop för exakt samma sak som for loopen innan.

// $names = ['alex', 'billy', 'dale'];

// foreach ($names as $name) {
//     echo $name, '<br>';
// }

// För att välja ut index i arryen. Index är nummer.

// $names = ['alex', 'billy', 'dale'];

// foreach ($names as $index => $name) {
//     echo $index, "; ", $name, '<br>';
// }

// Mer komplex foreeach vid åtkomst från databas. - Accessing database items.

// $topics = [
//     [
//         'id' => 1,
//         'title' => 'The best way to learn PHP?',
//         'posts' => [
//             ['body' => 'Practise a lot!'],
//             ['body' => 'Work on a project.'],
//         ]   
//     ],
//     [
//         'id' => 2,
//         'title' => 'How do i use a foreach loop?',
//         'posts' => [
//             ['body' => 'Just watch this part.'],
//         ]   
//     ],
// ];

// foreach ($topics as $topic) {
//     echo '<h1>' . $topic['title'] . '</h1>';
//     foreach ($topic['posts'] as $post) {
//         echo '<p>' . $post['body'] . '</p>';
//     }
// }

// Breaking and continuing, break används exempelvis om det är en väldigt lång lista att leta i så gör den break så fort den hittat rätt nyckel.

// $dogs = [
//     ['dogbreed' => 'Icelandic Sheepdog'],
//     ['dogbreed' => 'Dachshund'],
//     ['dogbreed' => 'Aussie'],
//     ['dogbreed' => 'Tollare'],
//     ['dogbreed' => 'Siberian Husky'],
//     ['dogbreed' => 'Weimaraner'],
// ];

// $toFind = 'Border Collie';
// $result = null;

// foreach ($dogs as $dog) {
//     if ($dog['dogbreed'] === $toFind) {
//         $result = $dog;
//         break;
//     }
// }

// var_dump($result);

//Continuing - Istället för att exempelvis plocka bort 'Tollare' och sedan break; så tar continue; bort ett värde och skriver sedan ut resten.

// $dogs = [
//     ['dogbreed' => 'Icelandic Sheepdog'],
//     ['dogbreed' => 'Dachshund'],
//     ['dogbreed' => 'Aussie'],
//     ['dogbreed' => 'Tollare'],
//     ['dogbreed' => 'Siberian Husky'],
//     ['dogbreed' => 'Weimaraner'],
// ];

// $toSkip = 'Tollare';

// foreach ($dogs as $dog) {
//     if ($dog['dogbreed'] === $toSkip) {
//         continue;
//     }
//     echo $dog['dogbreed'], '<br>';
// }

// $users = [
//     [
//         'username' => 'freja',
//         'likes' => ['dogs', 'books'],
//     ],
//     [
//         'username' => 'magnus',
//         'likes' => ['warhammer', 'guitars'],
//     ],
//     [
//         'username' => 'floki',
//         'likes' => ['livercandy', 'females']
//     ]
// ];

// $toFind = 'warhammer';
// $found = null;

// foreach ($users as $user) {
//     foreach ($user['likes'] as $like) {
//         if ($like === $toFind) {
//             $found = $user;
//             break;
//         }
//     }
// }

echo "<div class=\"container\">";
echo "<div class=\"row\">";

// MAIN USER INFORMATION
$users = [
    [
        'userHeader' => 'List-based media object',
        'userText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ]
];

foreach($users as $user)
{
    echo "<div class=\"col-md\">";
    echo "User";
    echo "<ul class=\"list-unstyled\">";
    echo "<div class=\"list-container\">";
    echo "<li class=\"media\">";
    echo "<img class=\"mr-3\" src=\"https://placekitten.com/96/139\" alt=\"Generic placeholder image\">";
    echo "<div class=\"media-body\">";
    echo "<h5 class=\"mt-0 mb-1\">" . $user['userHeader'];
    echo "</h5>";
    echo "<p>" . $user['userText'];
    echo "</p>";
    echo "</div>";
    echo "</li>";
}

//NUMBERS (TWEETS/FOLLOWING/FOLLOWERS).

// Tweet-numbers
$tweetNumbers = [
    [
        'numberOfTweets' => '4'
    ]
];

foreach($tweetNumbers as $tweetNumber)
{

    echo "<div class=\"container about-me\">";
    echo "<div class=\"row\">";
    echo "<div class=\"col-sm\">";
    echo "<span class=\"badge badge-light\">" .$tweetNumber['numberOfTweets'];
    echo "</span>";
    echo "<br>";
    echo "<p>";
    echo "Tweets";
    echo "</p>";
    echo "</div>";
}

        //Divider
        echo "<div class=\"divider\">";
        echo "</div>";

//User following-numbers
$userAreFollowing = [
    [
        'numberOfFollowing' => '4'
    ]
];

foreach ($userAreFollowing as $userFollows) 
{
    echo "<div class=\"col-sm\">";
    echo "<span class=\"badge badge-light\">" . $userFollows['numberOfFollowing'];
    echo "</span>";
    echo "<br>";
    echo "<p>";
    echo "Following";
    echo "</p>";
    echo "</div>";
}

        //Divider
        echo "<div class=\"divider\">";
        echo "</div>";

//User followers-numbers
$usersFollowers = [
    [
        'numberOfFollowers' => '4'
    ]
];

foreach ($usersFollowers as $userFollowers)
{
    echo "<div class=\"col-sm\">";
    echo "<span class=\"badge badge-light\">" . $userFollowers['numberOfFollowers'];
    echo "</span>";
    echo "<br>";
    echo "<p>";
    echo "Followers";
    echo "</p>";
    echo "</div>";
}

//COMPOSE A NEW TWEET BOX

echo "<div class=\"input-group mb-3\">";
echo "<input type=\"text\" class=\"form-control\" placeholder=\"Compose new tweet\" aria-label=\"Recipient\'s username\" aria-describedby=\"basic-addon2\">";
echo "<div class=\"input-group-append\">";
echo "<button class=\"btn my-2 my-sm-0\" type=\"button\">";
echo "Tweet";
echo "</button>";
echo "</div>";
echo "</div>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</ul>";

// POTENTIAL FOLLOWING OPTIONS
$followers = [
    [
        'followerTitle' => 'WWF',
        'followerSlogan' => 'World Wildlife Fund: WWF - Endangered Species Conservation'
    ],
    [
        'followerTitle' => 'David Attenborough',
        'followerSlogan' => 'English broadcaster and naturalist'
    ],
    [
        'followerTitle' => 'Greenpeace',
        'followerSlogan' => 'Saving animals and wildlife since like forever.'
    ],
    [
        'followerTitle' => 'Fender',
        'followerSlogan' => 'Guitars and amps.'
    ],
    [
        'followerTitle' => 'Arthur Morgan',
        'followerSlogan' => 'Whiskey\'s got me in more trouble than a pistol ever has.'
    ],
    [
        'followerTitle' => 'Lady Olynder',
        'followerSlogan' => 'Mortarch of Grief'
    ]
];

echo "<ul class='list-unstyled'>";
echo "<div class=\"list-container\">";

foreach($followers as $follower)
{
    echo "<li class='media' id=\"firstSuggestion\">
    <img class=\"mr-3\" src=\"http://placebear.com/64/64\" alt=\"Generic placeholder image\">
    <div class=\"media-body\">
    <button type=\"button\" class=\"close\" data-suggestion=\"#firstSuggestion\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;
    </span>
    </button>
    <h6 class=\"mt-0 mb-1\">{$follower['followerTitle']}
    </h6>
    <div class=\"small-text\">{$follower['followerSlogan']}
    </div>
    <button type=\"button\" class=\"btn btn-dark btn-sm\" style=\"float: right\">
    <i class=\"fab fa-twitter fa-1x\">
    </i>
    Follow
    </button>
    </div>
    </li>";
}

    echo "</div>";
    echo "</ul>";
    echo "</div>";

?>
<div class="col-lg">
Tweets

<ul class="list-unstyled">
    
<?php
$tweets = [
    [
        'tweetSubject' => 'List-based media object',
        'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ],
    [
        'tweetSubject' => 'List-based media object',
        'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ],
    [
        'tweetSubject' => 'List-based media object',
        'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ],
    [
        'tweetSubject' => 'List-based media object',
        'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ],
    [
        'tweetSubject' => 'List-based media object',
        'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ]
];

foreach($tweets as $tweet)
{
    echo "<div class=\"list-container\">";
    echo "<li class=\"media\">";
    echo "<img class=\"mr-3\" src=\"https://placekitten.com/96/139\" alt=\"Generic placeholder image\">";
    echo "<div class=\"media-body\">";
    echo "<h5 class=\"mt-0 mb-1\">" . $tweet['tweetSubject'];
    echo "</h5>";
    echo "<p>" . $tweet['tweetText'];
    echo "</p>";
    echo "</div>";
    echo "</li>";
    echo "</div>";
}
?>

</ul>";
</div>";

</div>";
</div>";
