<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no">
    <link rel="stylesheet" href="./styles/style.css?v=2.1" media="screen" type="text/css"/>
    <script src="https://kit.fontawesome.com/ed342dc3ca.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/Icon.svg"/>
    <link rel="stylesheet" href="../styles/background.css?v=23.">
    <title>PortfolioTracker</title>
</head>
<body>
    <!-- Affichage du formulaire de connexion et d'inscription -->
        <form id="connexion" class="input-group" action="/backend/login_verification.php" method="POST">      
        <h1>Bonjour!</h1>
        <p>Bienvenue sur le site<br>de gestion du programme</p>
        <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p style='color:red;'>⚠️Utilisateur ou mot de passe incorrect</p>";
            }
        ?>  
            <input type="text" class="input-field" placeholder="Identifiant" name="username" required>

            <input id="password" type="password" class="input-field" placeholder="Mot de passe" name="password">
            <div id="password-reveal" onclick="reveal_password()">
                <i id="eye" class="fas fa-eye"></i>
                <p id="password-reveal-text">Afficher le mot de passe</p>
            </div>
            <button type="submit" class="submit-btn">Connexion</button>
            
        </form>
        <script>
        function reveal_password() {
            var text = document.getElementById('password-reveal-text')
            
            var x = document.getElementById("password");
            var y = document.getElementById("eye");
            if (x.type === "password") {
                x.type = "text";
                y.className = "fas fa-eye-slash";
                text.innerHTML = "Masquer le mot de passe"
            } else {
                x.type = "password";
                y.className = "fas fa-eye";
                text.innerHTML = "Afficher le mot de passe"
            }
        }
    </script>

</body>
</html>


