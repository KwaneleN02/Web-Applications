
<!DOCTYPE html>
<html lang="en">
<body>
<?php require './includes/head.php'; ?>
<!-- <link rel="stylesheet" href="./styles/side-nav.css"> -->

<div class="tab-items">
    <!-- Side-Nav -->
    <?php require_once './includes/dashboard/side-nav.php' ?>

    <!-- Dashboard-tab -->
    <?php require_once './includes/dashboard/home-tab.php'?>

    <!-- Dashboard-tab -->
    <?php require_once './includes/dashboard/dashboard-tab.php'?>

    <!-- Homepage-tab -->
    <?php require_once './includes/dashboard/homepage-tab.php'?>

    <!-- Teams Tab -->
    <?php require_once './includes/dashboard/teams-tab.php'?>

    <!-- Featured Games Tab -->
    <?php require_once './includes/dashboard/games-tab.php'?>

    <!-- Events -->
    <?php require_once './includes/dashboard/events-tab.php'?>

    <!-- About Us -->
    <?php require_once './includes/dashboard/about-tab.php'?>

</div>
<!-- Scripts -->
<?php require_once './includes/scripts.php' ?>
</body>
</html>


