<?php 
    session_start();
    $message = 'Message de '.$_SESSION['username'].' : '.$_GET['message'];
    $token = "1813447727:AAHDPI54DetjXDDNFCMqtN-7phGvwNy9rqY";
    $chat_id = "-431364858";
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message";

    $result = file_get_contents($url);

    header('Location: ../frontend/chat.php');
?>