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

    <body>
        <!-- Main Navigation Bar -->
        <?php include "navbar.php"; ?>

    </header>
        <div id="cover-image-wrapper">
            <img src="images/house_header.jpg" alt="Cover Image"/>
        </div>

        <div id="profile-image-wrapper">
            <div class="container">
                <div class="row">
                   <div class="col-4">
                        <img src="images/lama_face.jpg" id="profile-image" alt="Profile image" />
                    </div>
                    <div class="col-6">
                        <a href="#" class="profile-stats">Tweets<span>320</span></a>
                        <a href="#" class="profile-stats">Following<span>320</span></a>
                        <a href="#" class="profile-stats">Followers<span>320</span></a>
                        <a href="#" class="profile-stats">Likes<span>320</span></a>
                    </div>
                    <div class="col-2">
                        <button type="button" id="button-user" class="btn">Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </header>


    </body>
</html>