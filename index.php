<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no">
    <link rel="stylesheet" href="./styles/style.css?v=1" media="screen" type="text/css"/>
    <script src="https://kit.fontawesome.com/ed342dc3ca.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
    <link rel="shortcut icon" type="image/x-icon" href="/assets/Icon.svg"/>
    <title>PortfolioTracker</title>
</head>
<body>
    <!-- Affichage du formulaire de connexion et d'inscription -->
    <form id="connexion" class="input-group" action="/backend/login_verification.php" method="POST">      
    <div class="title"><h1>Bonjour!</h1></div>
    <div class="subtitle"><p>Bienvenue sur le site<br>de gestion du programme</p></div>
    <img class="bot" src="/assets/bot.gif"/>
    <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red;'>⚠️Utilisateur ou mot de passe incorrect</p>";
        }
    ?>  
        <input id="password" type="password" class="input-field" placeholder="Code secret" name="password">
        
        <button type="submit" class="submit-btn">
        <svg id="power_button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                viewBox="0 0 30.143 30.143" style="enable-background:new 0 0 30.143 30.143;" xml:space="preserve">
                    <path d="M20.034,2.357v3.824c3.482,1.798,5.869,5.427,5.869,9.619c0,5.98-4.848,10.83-10.828,10.83
                        c-5.982,0-10.832-4.85-10.832-10.83c0-3.844,2.012-7.215,5.029-9.136V2.689C4.245,4.918,0.731,9.945,0.731,15.801
                        c0,7.921,6.42,14.342,14.34,14.342c7.924,0,14.342-6.421,14.342-14.342C29.412,9.624,25.501,4.379,20.034,2.357z"/>
                    <path d="M14.795,17.652c1.576,0,1.736-0.931,1.736-2.076V2.08c0-1.148-0.16-2.08-1.736-2.08
                        c-1.57,0-1.732,0.932-1.732,2.08v13.496C13.062,16.722,13.225,17.652,14.795,17.652z"/>
            </svg>
        </button>
    </form>
</body>
<footer>
        <script>
            var root = document.querySelector(':root');
            root.style.setProperty('--bg-color', "#FFF");
            root.style.setProperty('--accent-color', "#181818");
            root.style.setProperty('--primary-color', "#618DFF");
            root.style.setProperty('--secondary-color', "#FF7700");
        </script>
    <script src="/scripts/animation.js"></script>
</footer>

</html>


