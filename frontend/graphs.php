<?php
    ini_set('display_errors', 'on');
    session_start();
    require("../backend/database.php");
    require("../backend/functions.php");
    require("../backend/task_bar.php");
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
    <title>PortfolioTracker  | Graphs</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/graphs.css">
    <link rel="stylesheet" href="../styles/taskbar.css">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/Icon.svg"/>
    <script src="/scripts/index.js" ></script>
    <script src="../scripts/drawdown_graph.js" defer></script>
    <script src="../scripts/portfolio_graph.js" defer ></script>
    <script>
        <?php 
            $database   = cnxDB() ;

            if ($database == true){
                $requete = "SELECT * FROM positions" ;
                $result_positions = mysqli_query($database,$requete);
        
                if ($result_positions==true and mysqli_num_rows($result_positions) > 0){
                    $results = [];
                    while ($row = mysqli_fetch_assoc($result_positions)){
                        array_push($results, (floatval($row['lowest_price']) / floatval($row['opening_price']) - 1)*100 );
                    }
                    echo ("var drawdown =".json_encode($results).";\n");
                }

                $requete = "SELECT * FROM data ORDER BY date ASC" ;
                $result_data = mysqli_query($database,$requete);
            
                if  ($result_data == true and mysqli_num_rows($result_data) > 0 ){
                    $results_dates = [];
                    $results_values = [];
                    while ($row = mysqli_fetch_assoc($result_data)){
                        array_push($results_dates, $row['date']);
                        array_push($results_values, $row['value']);
                    }
                    echo ("var dates =".json_encode($results_dates).";\n");
                    echo ("var values =".json_encode($results_values).";\n");
                }
            }
        ?>
    </script>

</head>
<body defer onload="change_mode()">
    <a class='logout' href="../backend/logout.php" >
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 2.91666C7.58968 2.91666 6.47688 3.37759 5.65641 4.19806C4.83594 5.01854 4.375 6.13133 4.375 7.29166V27.7083C4.375 28.8686 4.83594 29.9814 5.65641 30.8019C6.47688 31.6224 7.58968 32.0833 8.75 32.0833H17.5C18.6603 32.0833 19.7731 31.6224 20.5936 30.8019C21.4141 29.9814 21.875 28.8686 21.875 27.7083V7.29166C21.875 6.13133 21.4141 5.01854 20.5936 4.19806C19.7731 3.37759 18.6603 2.91666 17.5 2.91666H8.75ZM23.7606 10.6356C24.0341 10.3622 24.405 10.2086 24.7917 10.2086C25.1784 10.2086 25.5492 10.3622 25.8227 10.6356L31.656 16.4689C31.9294 16.7424 32.083 17.1133 32.083 17.5C32.083 17.8867 31.9294 18.2576 31.656 18.531L25.8227 24.3644C25.5477 24.63 25.1793 24.777 24.7969 24.7737C24.4145 24.7704 24.0488 24.617 23.7784 24.3466C23.508 24.0762 23.3546 23.7104 23.3513 23.3281C23.348 22.9457 23.495 22.5773 23.7606 22.3023L27.1046 18.9583H14.5833C14.1966 18.9583 13.8256 18.8047 13.5521 18.5312C13.2786 18.2577 13.125 17.8868 13.125 17.5C13.125 17.1132 13.2786 16.7423 13.5521 16.4688C13.8256 16.1953 14.1966 16.0417 14.5833 16.0417H27.1046L23.7606 12.6977C23.4872 12.4242 23.3336 12.0534 23.3336 11.6667C23.3336 11.28 23.4872 10.9091 23.7606 10.6356V10.6356Z" fill="var(--accent-color)"/>
        </svg>
    </a>
    <div class="header">
        <h1>Tableau de bord</h1>
        <p>Historique du portefeuille</p>
    </div>
    <div class="graph">
        <canvas id="portfolio" width='100%' height='40vh'></canvas>
        <canvas id="drawdown" width='100%' height='40vh'></canvas>
    </div>

</body>
<footer>

    <?php
        task_bar("graphs");
    ?>
</footer>
</html>