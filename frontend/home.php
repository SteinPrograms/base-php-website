<?php
    ini_set('display_errors', 'on');
    session_start();
    require("../backend/database.php");
    require("../backend/functions.php");
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
    <title>PortfolioTracker  | Home</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/home.css?v=1.x">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/Icon.svg"/>

</head>

<body>    
    <a class='logout' href="../backend/logout.php" >
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 2.91666C7.58968 2.91666 6.47688 3.37759 5.65641 4.19806C4.83594 5.01854 4.375 6.13133 4.375 7.29166V27.7083C4.375 28.8686 4.83594 29.9814 5.65641 30.8019C6.47688 31.6224 7.58968 32.0833 8.75 32.0833H17.5C18.6603 32.0833 19.7731 31.6224 20.5936 30.8019C21.4141 29.9814 21.875 28.8686 21.875 27.7083V7.29166C21.875 6.13133 21.4141 5.01854 20.5936 4.19806C19.7731 3.37759 18.6603 2.91666 17.5 2.91666H8.75ZM23.7606 10.6356C24.0341 10.3622 24.405 10.2086 24.7917 10.2086C25.1784 10.2086 25.5492 10.3622 25.8227 10.6356L31.656 16.4689C31.9294 16.7424 32.083 17.1133 32.083 17.5C32.083 17.8867 31.9294 18.2576 31.656 18.531L25.8227 24.3644C25.5477 24.63 25.1793 24.777 24.7969 24.7737C24.4145 24.7704 24.0488 24.617 23.7784 24.3466C23.508 24.0762 23.3546 23.7104 23.3513 23.3281C23.348 22.9457 23.495 22.5773 23.7606 22.3023L27.1046 18.9583H14.5833C14.1966 18.9583 13.8256 18.8047 13.5521 18.5312C13.2786 18.2577 13.125 17.8868 13.125 17.5C13.125 17.1132 13.2786 16.7423 13.5521 16.4688C13.8256 16.1953 14.1966 16.0417 14.5833 16.0417H27.1046L23.7606 12.6977C23.4872 12.4242 23.3336 12.0534 23.3336 11.6667C23.3336 11.28 23.4872 10.9091 23.7606 10.6356V10.6356Z" fill="white"/>
        </svg>
    </a>
    <div class="header">
        <h1>Welcome</h1>
        <?php
            $test = $_SESSION['username'];
            echo "<p>$test</p>";
        ?>

    </div>
    
    
    <div class="status">
        <h1>Program Status</h1>
        <p>Working for : </p>
    </div>
    <div class="transactions">
        <h1>Transaction history</h1>
        <div class="transaction">
        <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 20.396C0 9.13186 8.95455 0 20 0C31.0455 0 40 9.13186 40 20.396C40 31.6602 31.0455 40.7921 20 40.7921C8.95455 40.7921 0 31.6602 0 20.396ZM21.48 6.33946C21.3118 6.0991 21.0898 5.90318 20.8323 5.768C20.5749 5.63283 20.2895 5.56231 20 5.56231C19.7105 5.56231 19.4251 5.63283 19.1677 5.768C18.9102 5.90318 18.6882 6.0991 18.52 6.33946L9.42909 19.3188C9.20903 19.6331 9.09073 20.0098 9.09073 20.396C9.09073 20.7823 9.20903 21.1589 9.42909 21.4733L18.52 34.4526C18.6882 34.693 18.9102 34.8889 19.1677 35.0241C19.4251 35.1593 19.7105 35.2298 20 35.2298C20.2895 35.2298 20.5749 35.1593 20.8323 35.0241C21.0898 34.8889 21.3118 34.693 21.48 34.4526L30.5709 21.4733C30.791 21.1589 30.9093 20.7823 30.9093 20.396C30.9093 20.0098 30.791 19.6331 30.5709 19.3188L21.48 6.33946V6.33946ZM20 22.1075L15.8055 20.396L20 18.6846L24.1945 20.396L20 22.1075ZM20.6745 25.8251L24.0055 24.4678L20 30.1843L15.9945 24.4678L19.3255 25.8251C19.7585 26.0015 20.2415 26.0015 20.6745 25.8251V25.8251ZM20 10.6059L15.9945 16.3242L19.3255 14.967C19.7585 14.7905 20.2415 14.7905 20.6745 14.967L24.0055 16.3242L20 10.6059Z" fill="#7B61FF"/>
        </svg>
        <div class="transaction-info">
            <h2 class='side'>Buy</h2>
            <div class="break"></div>
            <p class='date'>Sep 30</p>
        </div>
        

        </div>
    </div>
<footer>
    <?php
dock();
?>
</footer>

</body>
</html>