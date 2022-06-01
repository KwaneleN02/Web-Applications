<?php require_once './includes/boostrap.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- For all icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/nav.css">
    <link rel="stylesheet" href="./styles/teams.css">
    <title>Teams</title>
</head>


<body style="background-color: black; color:white">

    <?php require_once './includes/nav.php' ?>
   
    

    <section class="main-container" style="margin-top: 10rem;">
        <div class="container center" style="margin-bottom: 10rem ;">
            <h1>
                Meet the Gamers 
            </h1>
        </div>
        <div class="row">
            <!-- For each here -->
<?php foreach((array) $teams->allTeams() as $team ): ?>
            <div class="col s3">
                <div class="card-title center">
                    <h5> <?=$team['Gamertag']?>  </h5>
                </div>

                <div class="card game-card center">
                    <div class="card-img" >
                    <img src="./img/fausto-sandoval-Cc-KUNmV1UE-unsplash.jpg" alt="" >
                    </div>
                </div>

                <div class="card-content center">
                    <p>Game: <?= $team['Game']?> </p>
                    <p>Gamer Stats: <?=$team['GamerStats'] ?> </p>
                </div>

                <div class="socials center">
                    <a href="#">Facebook</a>
                    <a href="#">LinkedIn</a>
                    <a href="#">TikTok</a>
                    <a href="#">Instagram</a>
                </div>
                
            </div>
<?php endforeach ?>

        </div>

    </section>
    

</body>
</html>