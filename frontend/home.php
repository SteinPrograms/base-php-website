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
    echo "<p>$test</p>";
    ?>
    
    <div class="status">
        <h1>Program Status</h1>
        <p>Working for : </p>
    </div>

<div class="task-bar">
    <a href="./home.php">
        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
            <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 19v-8.5a1 1 0 0 0-.4-.8l-7-5.25a1 1 0 0 0-1.2 0l-7 5.25a1 1 0 0 0-.4.8V19a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1z"/>
        </svg>
    </a>
    <a href="./graphs.php">
        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
            <path fill="currentColor" fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6zm10 2a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0V8zm-4 3a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0v-5zm8 3a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2z" clip-rule="evenodd"/>
        </svg>
    </a>
    <a href="./chat.php">
        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12h-.394a2 2 0 0 0-1.11.336L3 14V5a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v2"/><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10h7a2 2 0 0 1 2 2v9l-2.496-1.664a2 2 0 0 0-1.11-.336H12a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2z"/>
        </svg>
    </a>
    <a href="./funds.php">
        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
            <path fill="currentColor" fill-rule="evenodd" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11-4.925 11-11 11S1 18.075 1 12zm12-6a1 1 0 1 0-2 0v1a3 3 0 0 0 0 6h2a1 1 0 1 1 0 2H9a1 1 0 1 0 0 2h2v1a1 1 0 1 0 2 0v-1a3 3 0 1 0 0-6h-2a1 1 0 1 1 0-2h4a1 1 0 1 0 0-2h-2V6z" clip-rule="evenodd"/>
        </svg>
    </a>

</div>

</body>
</html>