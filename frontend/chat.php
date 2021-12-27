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
    <link rel="stylesheet" href="../styles/chat.css?v=1.">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/Icon.svg"/>

</head>

<body>    
    <a class='logout' href="../backend/logout.php" >
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 2.91666C7.58968 2.91666 6.47688 3.37759 5.65641 4.19806C4.83594 5.01854 4.375 6.13133 4.375 7.29166V27.7083C4.375 28.8686 4.83594 29.9814 5.65641 30.8019C6.47688 31.6224 7.58968 32.0833 8.75 32.0833H17.5C18.6603 32.0833 19.7731 31.6224 20.5936 30.8019C21.4141 29.9814 21.875 28.8686 21.875 27.7083V7.29166C21.875 6.13133 21.4141 5.01854 20.5936 4.19806C19.7731 3.37759 18.6603 2.91666 17.5 2.91666H8.75ZM23.7606 10.6356C24.0341 10.3622 24.405 10.2086 24.7917 10.2086C25.1784 10.2086 25.5492 10.3622 25.8227 10.6356L31.656 16.4689C31.9294 16.7424 32.083 17.1133 32.083 17.5C32.083 17.8867 31.9294 18.2576 31.656 18.531L25.8227 24.3644C25.5477 24.63 25.1793 24.777 24.7969 24.7737C24.4145 24.7704 24.0488 24.617 23.7784 24.3466C23.508 24.0762 23.3546 23.7104 23.3513 23.3281C23.348 22.9457 23.495 22.5773 23.7606 22.3023L27.1046 18.9583H14.5833C14.1966 18.9583 13.8256 18.8047 13.5521 18.5312C13.2786 18.2577 13.125 17.8868 13.125 17.5C13.125 17.1132 13.2786 16.7423 13.5521 16.4688C13.8256 16.1953 14.1966 16.0417 14.5833 16.0417H27.1046L23.7606 12.6977C23.4872 12.4242 23.3336 12.0534 23.3336 11.6667C23.3336 11.28 23.4872 10.9091 23.7606 10.6356V10.6356Z" fill="white"/>
        </svg>
    </a>
    <div class="header">
        <div class="status-light"><p>Offline</p></div>
        <h1>Conversation</h1>
        <?php
            $friend_name = "Alfred";
            echo "<p>Chatting with $friend_name</p>";
        ?>
    </div>
    
    <div class="chat_box">
        <input type="text" placeholder="Add your message" size='100vw'>
        <button><p>Send</p> 
        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_5_148)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.18866 18.9474C3.16952 18.7506 3.20915 18.5526 3.30253 18.3783C3.39592 18.204 3.53888 18.0613 3.71334 17.9683L21.4807 8.51727C21.6447 8.42974 21.8299 8.38968 22.0155 8.40159C22.201 8.41349 22.3796 8.47689 22.5311 8.58466C22.6826 8.69243 22.801 8.84031 22.8732 9.01168C22.9453 9.18306 22.9682 9.37115 22.9393 9.55482L19.8397 29.4393C19.8093 29.6348 19.7216 29.8169 19.5876 29.9625C19.4537 30.1081 19.2796 30.2108 19.0873 30.2574C18.895 30.304 18.6933 30.2926 18.5075 30.2245C18.3217 30.1564 18.1603 30.0348 18.0437 29.8749L13.2673 23.3333L16.3898 18.9436C16.5435 18.7274 16.6051 18.4591 16.561 18.1976C16.5168 17.9361 16.3706 17.7028 16.1545 17.549C15.9384 17.3953 15.6701 17.3337 15.4085 17.3778C15.147 17.422 14.9137 17.5682 14.76 17.7843L11.6375 22.174L3.8904 19.8086C3.7014 19.7507 3.53382 19.638 3.40882 19.4849C3.28381 19.3318 3.207 19.145 3.18808 18.9482L3.18866 18.9474Z" fill="black"/>
            </g>
            <defs>
            <clipPath id="clip0_5_148">
            <rect width="24" height="24" fill="white" transform="translate(0 19.557) rotate(-54.575)"/>
            </clipPath>
            </defs>
        </svg>

        </button>
    </div>
    <div class="area" >
        <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
        </ul>
    </div >

<footer>
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