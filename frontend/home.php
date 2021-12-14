<?php
    ini_set('display_errors', 'on');
    session_start();
    require("../backend/database.php");
    if ($_SESSION["auth"]!=1){
        header('Location:../index.php?erreur=1');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioTracker</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/home.css">

</head>

<body>
<div class="header"> 
    <img src="../assets/avatar.png" alt="" width="50px">
    <form action='../backend/logout.php'>
        <input type='submit' value='deconnexion'/>
    </form>
</div>


    <h1>Welcome</h1>
    <?php
    $test = $_SESSION['username'];
    echo "<h2>$test</h2>";
    ?>
    <div class="graph">
    <?php 
    database_to_chart();
    ?>
    </div>
<div class="task-bar">
    <a href="./home.php"><i class="fas fa-home"></i></a>
    <a href="./settings.php"><i class="fas fa-cogs"></i></a>
</div>

</body>
</html>