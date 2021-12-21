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
    <!-- Affichage du formulaire de connexion et d'inscription -->
    <div class="form-box">
        <!-- Boutons connexion et inscription pour passer d'un affichage à un autre -->
        <form id="connexion" class="input-group" action="/backend/login_verification.php" method="POST">
    
            <i class="fas fa-user field_group">
            <input type="text" class="input-field" placeholder="Identifiant" name="username" required>
            </i>
            <i class="fas fa-lock field_group">
            <input id="password" type="password" class="input-field" placeholder="Mot de passe" name="password">
            <i id="eye" class="fas fa-eye" onclick="reveal_password()"></i>
            </i>
            <button type="submit" class="submit-btn">Se connecter</button>
            <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<h1 style='color:red;position:absolute;top:-20px;left:0px;right:0px;margin:auto;'>⚠️Utilisateur ou mot de passe incorrect</h1>";
            }
            ?>
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


