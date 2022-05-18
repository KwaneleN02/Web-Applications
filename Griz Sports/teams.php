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
    <title>Teams</title>
</head>
<body style="background-color: black; color:white">

    <?php require_once './includes/nav.php' ?>
   
    

    <section class="main-container" style="margin-top: 10rem;">
        <div class="container center">
            <h1>
                <a href=""> Meet the Gamers </a>
            </h1>
        </div>
        <div class="container" > 
<?php foreach((array) $teams->allTeams() as $team): ?>

                <div class="card small horizontal center" style="padding-right: 20px;">
                    <div class="card-image">
                        <img src="img/fausto-sandoval-Cc-KUNmV1UE-unsplash.jpg" style="width: 300px;">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <div class="card-title" style="color: black;">
                            <strong> <?= $team['Firstname']; ?>  </strong>

                            </div>
                        
                            <!-- First Name -->
                        
                            <!-- Gamer Tag -->
                            <p>Gamer Tag</p>
                            <strong> <?= $team['Gamertag']; ?>  </strong>

                            <p style="width: 100%;">Gamer Stats</p>
                            <!-- Gamer Stats -->
                           <strong>  <?= $team['GamerStats']; ?>  </strong>
                        </div>

                        <div class="card-action" style="display: flex;">
                        <a href="#">Social Media1</a>
                        <a href="#">Social Media2</a>
                        </div>
                    </div>
                </div>
 <?php endforeach; ?>
            
        </div>

    </section>
    

</body>
</html>