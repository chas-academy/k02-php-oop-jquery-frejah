<?php
    include "src/TwitterStatsController.php";
    include "src/views/TwitterStatsView.php";

    include "src/FollowingSuggestionsController.php";
    include "src/views/FollowingSuggestionsView.php";

    include "src/TweetsController.php";
    include "src/views/TweetsView.php";

    $statsController = new TwitterStatsController();
    $statsView = new TwitterStatsView($statsController);

    $followingController = new FollowingSuggestionsController();
    $followingView = new FollowingSuggestionsView($followingController);

    $tweetsController = new TweetsController();
    $tweetsView = new TweetsView($tweetsController);
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu" />

        <title>Twitter Clone</title>
    </head>

    <body>
        <!-- Main Navigation Bar -->
        <?php include "navbar.php"; ?>
 
        <div id="cover-image-wrapper">
            <img src="/// BACKGROUND IMAGE ///" alt="Cover Image"/>
        </div>
    <?php
        $profileInfo = [
            [
            'userImg' => "images/lama_face.jpg",
            'userBackground' => "images/house_header.jpg",
            'userName' => "Chewpaca de Paca",
            'userText' => "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."
            ]
        ];
    ?>

        <div id="profile-image-wrapper">
            <div class="container">
                <div class="row">
                   <div class="col-4">
                        <img src="/// PROFILE IMAGE ///" id="profile-image" alt="Profile image">
                    </div>

                    <?php $statsView->render(); ?>

                    <div class="col-2">
                        <button type="button" id="button-user" class="btn">Follow</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container main-container-user">
        <div class="row main-box">

                <!-- PERSONAL INFO -->
                <div class="col-md">
                    <ul class="list-unstyled">
                        <div class="list-container">
                            <li class="media">
                                <!-- <img class="mr-3" src="https://placekitten.com/96/139" alt="Generic placeholder image"> -->
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1" id="user-name"> // USERNAME /// <i class="fas fa-check-circle"></i></h5><br><br>
                                    <div class="user-text"> /// USER TEXT ///</div>
                                </div>
                            </li>

                            <div class="container numbers-container">
                                <div class="row">
                                    <!-- <div class="col-sm numbers-column">
                                        <p>Tweets</p>
                                    </div>

                                    <div class="col-sm">
                                        <p>Following</p>  
                                    </div>

                                    <div class="col-sm">
                                        <p>Followers</p>
                                    </div> -->

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Compose new tweet" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn my-2 my-sm-0" type="button">Tweet</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>

            <!-- WHAT TO FOLLOW? -->
            <ul class="list-unstyled">
                <div class="list-container">
                    <?php $followingView->render(); ?>
                </div>
            </ul>
        </div>


            <!-- ALL TWEETS -->
                <div class="col-lg">
                    <ul class="list-unstyled">
                        <?php $tweetsView->render(); ?>
                    </ul>
                </div>
            </div>
        </div>


    </body>
</html>