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
    <title>PortfolioTracker  | Chat</title>
    <link rel="stylesheet" href="../styles/chat.css?v=5">
    <link rel="stylesheet" href="../styles/taskbar.css?v=2">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/Icon.svg"/>
    <link rel="canonical" href="https://hugodemenez.fr/frontend/chat.php">


</head>

<body onload="change_mode()">    
    <a class='logout' href="../backend/logout.php" >
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 2.91666C7.58968 2.91666 6.47688 3.37759 5.65641 4.19806C4.83594 5.01854 4.375 6.13133 4.375 7.29166V27.7083C4.375 28.8686 4.83594 29.9814 5.65641 30.8019C6.47688 31.6224 7.58968 32.0833 8.75 32.0833H17.5C18.6603 32.0833 19.7731 31.6224 20.5936 30.8019C21.4141 29.9814 21.875 28.8686 21.875 27.7083V7.29166C21.875 6.13133 21.4141 5.01854 20.5936 4.19806C19.7731 3.37759 18.6603 2.91666 17.5 2.91666H8.75ZM23.7606 10.6356C24.0341 10.3622 24.405 10.2086 24.7917 10.2086C25.1784 10.2086 25.5492 10.3622 25.8227 10.6356L31.656 16.4689C31.9294 16.7424 32.083 17.1133 32.083 17.5C32.083 17.8867 31.9294 18.2576 31.656 18.531L25.8227 24.3644C25.5477 24.63 25.1793 24.777 24.7969 24.7737C24.4145 24.7704 24.0488 24.617 23.7784 24.3466C23.508 24.0762 23.3546 23.7104 23.3513 23.3281C23.348 22.9457 23.495 22.5773 23.7606 22.3023L27.1046 18.9583H14.5833C14.1966 18.9583 13.8256 18.8047 13.5521 18.5312C13.2786 18.2577 13.125 17.8868 13.125 17.5C13.125 17.1132 13.2786 16.7423 13.5521 16.4688C13.8256 16.1953 14.1966 16.0417 14.5833 16.0417H27.1046L23.7606 12.6977C23.4872 12.4242 23.3336 12.0534 23.3336 11.6667C23.3336 11.28 23.4872 10.9091 23.7606 10.6356V10.6356Z" fill="var(--accent-color)"/>
        </svg>
    </a>
    <div class="header">
        <div class="status"><div class="status-light"></div><p>Hors ligne</p></div>
        
        <h1>Conversation</h1>
        <?php
            $friend_name = "Alfred";
            echo "<p>Avec $friend_name</p>";
        ?>
    </div>
    
    
        <form name="form" action="../backend/sendmessage.php" method="get">
        <div class="chat_box">
            <input class="message_field" type="text" name='message' placeholder="Aa" size='100vw'>
            <button><p>Send</p>
            <svg width="24" height="24" viewBox="0 0 513 513" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_104_868)">
                <path d="M505.021 5.86797C504.957 5.82497 504.936 5.76097 504.893 5.71897C504.765 5.61197 504.637 5.59097 504.509 5.48397C503.378 4.50297 502.034 3.86297 500.712 3.15897C500.285 2.94597 499.965 2.58297 499.517 2.39097C499.453 2.36997 499.41 2.36997 499.368 2.34797C498.899 2.15597 498.515 1.81497 498.045 1.64397C496.274 0.98297 494.397 0.76897 492.498 0.59897C491.922 0.55597 491.367 0.29997 490.791 0.29997C488.316 0.27897 485.82 0.68397 483.388 1.55897L14.055 172.225C6.60999 174.934 1.27599 181.548 0.187993 189.398C-0.857007 197.249 2.49199 205.035 8.95599 209.643L150.844 310.998L170.876 451.307C172.113 459.84 178.364 466.795 186.727 468.95C188.476 469.398 190.268 469.611 192.018 469.611C198.61 469.611 204.989 466.539 209.063 461.078L259.41 393.985L391.442 507.222C395.389 510.593 400.317 512.363 405.351 512.363C407.74 512.363 410.13 511.958 412.476 511.147C419.644 508.587 424.956 502.379 426.321 494.87L512.316 25.942C513.725 18.262 510.738 10.71 505.021 5.86797ZM240.125 348.396L238.589 350.615L205.842 394.284L193.447 307.457L378.556 147.009L240.125 348.396Z" fill="var(--bg-color)"/>
                </g>
                <defs>
                <clipPath id="clip0_104_868">
                <rect width="512.662" height="512.662" fill="var(--accent-color)"/>
                </clipPath>
                </defs>
            </svg>

            </button>
            </div>
        </form>
        <script async src="https://comments.app/js/widget.js?3" data-comments-app-website="VDO03_sE" data-limit="5"></script>

<footer>
    <script src="/scripts/index.js"></script>
    <div class="task-bar">
        <ul>
            <li >
                <a  href="./home.php">
                    <svg  width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
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
                    <svg class="active" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
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

</body>
</html>