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

        <div class="container">
            <div class="row">

                <!-- PERSONAL INFO -->
                <div class="col-md">
                    User
                    <ul class="list-unstyled">
                        <div class="list-container">
                            <li class="media">
                                <img class="mr-3" src="https://placekitten.com/96/139" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>

                            <div class="container about-me">
                                <div class="row">
                                    <div class="col-sm">
                                        <span class="badge badge-light">
                                            4
                                        </span>
                                        <br>
                                        <p>Tweets</p>
                                    </div>

                                    <div class="divider">
                                    </div>

                                    <div class="col-sm">
                                        <span class="badge badge-light">
                                            4
                                        </span>
                                        <br>
                                        <p>Following</p>  
                                    </div>

                                    <div class="divider">
                                    </div>

                                    <div class="col-sm">
                                        <span class="badge badge-light">
                                            4
                                        </span>
                                        <br>
                                        <p>Followers</p>
                                    </div>

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
                            <li class="media" id="firstSuggestion">
                                <img class="mr-3" src="http://placebear.com/64/64" alt="Generic placeholder image">
                                <div class="media-body">
                                    <button type="button" class="close" data-suggestion="#firstSuggestion" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h6 class="mt-0 mb-1">WWF</h6>
                                    <div class="small-text">World Wildlife Fund: WWF - Endangered Species Conservation</div>
                                    <button type="button" class="btn btn-dark btn-sm" style="float: right">
                                        <i class="fab fa-twitter fa-1x"></i> Follow
                                    </button>
                                </div>
                            </li>

                            <li class="media" id="secondSuggestion">
                                <img class="mr-3" src="http://placebear.com/64/64" alt="Generic placeholder image">
                                <div class="media-body">
                                    <button type="button" class="close" data-suggestion="#secondSuggestion" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h6 class="mt-0 mb-1">David Attenborough</h6>
                                    <div class="small-text">English broadcaster and naturalist</div>
                                    <button type="button" class="btn btn-dark btn-sm" style="float: right">
                                        <i class="fab fa-twitter fa-1x"></i> Follow
                                    </button>
                                </div>
                            </li>

                             <li class="media" id="thirdSuggestion">
                                <img class="mr-3" src="http://placebear.com/64/64" alt="Generic placeholder image">
                                <div class="media-body">
                                    <button type="button" class="close" data-suggestion="#thirdSuggestion" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h6 class="mt-0 mb-1">Greenpeace</h6>
                                    <div class="small-text">Saving animals and wildlife since like forever.</div>
                                    <button type="button" class="btn btn-dark btn-sm" style="float: right">
                                        <i class="fab fa-twitter fa-1x"></i> Follow
                                    </button>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            

                <!-- ALL TWEETS -->
                <div class="col-lg">
                    Tweets

                    <ul class="list-unstyled">
                        
                        <div class="list-container">
                            <li class="media">
                                <img class="mr-3" src="https://placekitten.com/96/139" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                        </div>

                        <!-- <div class="list-container">
                            <li class="media">
                                <img class="mr-3" src="https://placekitten.com/96/139" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                        </div>

                        <div class="list-container">
                            <li class="media">
                                <img class="mr-3" src="https://placekitten.com/96/139" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                        </div> -->

                    </ul>
                </div>

            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

         <script>
            $('.close').on('click', function () {
                var dataSuggestion = $(this).attr('data-suggestion');

                $(dataSuggestion).toggle();
            });
        </script>
    </body>
</html>