<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no">
    <link rel="stylesheet" href="./styles/style.css" media="screen" type="text/css"/>
    <script src="https://kit.fontawesome.com/ed342dc3ca.js" crossorigin="anonymous"></script>

    <title>PortfolioTracker | Login</title>
</head>
<body>
    <div class="background">

    <!-- Affichage du formulaire de connexion et d'inscription -->

        <!-- Boutons connexion et inscription pour passer d'un affichage à un autre -->
        <form id="connexion" class="input-group" action="/backend/login_verification.php" method="POST">
          
        <h1>Bonjour!</h1>
            <p>Tu nous as manqué,<br>heureux de te revoir</p>
            <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p style='color:red;'>⚠️Utilisateur ou mot de passe incorrect</p>";
            }
            ?>  
            <input type="text" class="input-field" placeholder="Identifiant" name="username" required>

            <input id="password" type="password" class="input-field" placeholder="Mot de passe" name="password">
            <i id="eye" class="fas fa-eye" onclick="reveal_password()"></i>
            <button type="submit" class="submit-btn">Connexion</button>
            
        </form>
        </div>


        <script>
        function reveal_password() {
            var x = document.getElementById("password");
            var y = document.getElementById("eye");
            if (x.type === "password") {
                x.type = "text";
                y.className = "fas fa-eye-slash";
            } else {
                x.type = "password";
                y.className = "fas fa-eye";
                
            }
        }

    </script>

</body>
</html>


