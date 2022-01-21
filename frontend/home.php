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
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1">
    <title>PortfolioTracker  | Home</title>
    <link rel="stylesheet" href="../styles/home.css?v=2">
    <link rel="stylesheet" href="../styles/taskbar.css?v=2">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/Icon.svg"/>

</head>

<body onload="change_mode()">    
<a class='logout' href="../backend/logout.php" >
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 2.91666C7.58968 2.91666 6.47688 3.37759 5.65641 4.19806C4.83594 5.01854 4.375 6.13133 4.375 7.29166V27.7083C4.375 28.8686 4.83594 29.9814 5.65641 30.8019C6.47688 31.6224 7.58968 32.0833 8.75 32.0833H17.5C18.6603 32.0833 19.7731 31.6224 20.5936 30.8019C21.4141 29.9814 21.875 28.8686 21.875 27.7083V7.29166C21.875 6.13133 21.4141 5.01854 20.5936 4.19806C19.7731 3.37759 18.6603 2.91666 17.5 2.91666H8.75ZM23.7606 10.6356C24.0341 10.3622 24.405 10.2086 24.7917 10.2086C25.1784 10.2086 25.5492 10.3622 25.8227 10.6356L31.656 16.4689C31.9294 16.7424 32.083 17.1133 32.083 17.5C32.083 17.8867 31.9294 18.2576 31.656 18.531L25.8227 24.3644C25.5477 24.63 25.1793 24.777 24.7969 24.7737C24.4145 24.7704 24.0488 24.617 23.7784 24.3466C23.508 24.0762 23.3546 23.7104 23.3513 23.3281C23.348 22.9457 23.495 22.5773 23.7606 22.3023L27.1046 18.9583H14.5833C14.1966 18.9583 13.8256 18.8047 13.5521 18.5312C13.2786 18.2577 13.125 17.8868 13.125 17.5C13.125 17.1132 13.2786 16.7423 13.5521 16.4688C13.8256 16.1953 14.1966 16.0417 14.5833 16.0417H27.1046L23.7606 12.6977C23.4872 12.4242 23.3336 12.0534 23.3336 11.6667C23.3336 11.28 23.4872 10.9091 23.7606 10.6356V10.6356Z" fill="var(--accent-color)"/>
        </svg>
    </a>
    <div class="header">
        <h1>Bienvenue</h1>
        <?php
            $test = $_SESSION['username'];
            echo "<p>$test</p>";
        ?>

    </div>
    
    
    <div class="status">
        
        <h1>Status</h1>
        <div class="little-break"></div>
        <div class="status-light"></div>
        <p>En marche depuis : <p id="runtime"></p></p>
    </div>
    <h1 class='transaction-title'>Historique des transactions</h1>
    <div class="transactions">
    <?php 
        $requete = "select * from trading ORDER  BY date DESC";
        $result = @mysqli_query(cnxDB(),$requete);
        if ( $result == FALSE ){echo "Connexion à la base de données impossible " ;}
        elseif  ( mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo ("
                <div class='transaction'>
                    <img src='../assets/".$row['asset'].".svg' width='40px'alt=".$row['asset'].">
                    <div class='info'><h1 class='side'>".$row['side']."</h1>
                    <div class='full-break'></div>
                    <p class='date'>".date('M d à H:i:s',strtotime($row['date']))."</p>
                    <p class='value'>".$row['value']." $</p></div>
                </div>"
            );
            }}
        else{echo "Il n'y a pas de transaction à afficher";}
    ?>
    </div>
    
<footer>
<script src="/scripts/index.js"></script>
    <div class="task-bar">
        <ul>
            <li >
                <a  href="./home.php">
                    <svg class="active" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 19v-8.5a1 1 0 0 0-.4-.8l-7-5.25a1 1 0 0 0-1.2 0l-7 5.25a1 1 0 0 0-.4.8V19a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1z"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="./graphs.php">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <path fill="currentColor" fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6zm10 2a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0V8zm-4 3a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0v-5zm8 3a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="./chat.php">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12h-.394a2 2 0 0 0-1.11.336L3 14V5a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v2"/><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10h7a2 2 0 0 1 2 2v9l-2.496-1.664a2 2 0 0 0-1.11-.336H12a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2z"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="./funds.php">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <path fill="currentColor" fill-rule="evenodd" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11-4.925 11-11 11S1 18.075 1 12zm12-6a1 1 0 1 0-2 0v1a3 3 0 0 0 0 6h2a1 1 0 1 1 0 2H9a1 1 0 1 0 0 2h2v1a1 1 0 1 0 2 0v-1a3 3 0 1 0 0-6h-2a1 1 0 1 1 0-2h4a1 1 0 1 0 0-2h-2V6z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</footer>

<script>
/*
$requete = "select * from program";$result = @mysqli_query(cnxDB(),$requete);if ( $result == FALSE ){echo(date('Y-m-d H:i:s'));}elseif  ( mysqli_num_rows($result) > 0){while ($row = mysqli_fetch_assoc($result)){echo(strtotime($result['runtime'],'Y-m-d H:i:s'));}}else{echo(date('Y-m-d H:i:s'));}
*/
    
    
    function currentTime(start) {
        var start = new Date(Date.parse("<?php $requete = "select * from program";$result = @mysqli_query(cnxDB(),$requete);if ( $result == FALSE ){echo(date('Y-m-d H:i:s'));}elseif  ( mysqli_num_rows($result) > 0){while ($row = mysqli_fetch_assoc($result)){echo(date('Y-m-d H:i:s'));}}else{echo(date('Y-m-d H:i:s'));}?>"));
        var date = new Date(); /* creating object of Date class */
        date = updateTime(date);
        var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
        document.getElementById("runtime").innerText = hour + " : " + min + " : " + sec; /* adding time to the div */
        var t = setTimeout(function(){ currentTime(start) }, 1000); /* setting timer */
  }
  
  function updateTime(k) {
    if (k < 10) {
      return "0" + k;
    }
    else {
      return k;
    }
  }
        


    currentTime(); /* calling currentTime() function to initiate the process */
</script>
</body>
</html>
