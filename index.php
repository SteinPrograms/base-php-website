<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no">
    <link rel="stylesheet" href="./styles/style.css?v=1" media="screen" type="text/css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/scripts/index.js"></script>
    
    <link rel="shortcut icon" type="image/x-icon" href="/assets/Icon.svg"/>
    <title>PortfolioTracker</title>
</head>
<body onload="change_mode()">
<div class="images">    
<img id="btc2" src="/assets/Bitcoin-2.png" alt="">
    <img id="bricks" src="/assets/GoldBricks-1.png" alt="">
    <img id="btc1" src="/assets/Bitcoin-1.png" alt="">

</div>
    <div class="text">
        <div class="title"><h1>Bienvenue sur le site <br> de gestion du programme</h1></div>
        <div class="subtitle"><p>Vous retrouverez le suivi des transactions effectuées <br>et la performance du programme</p></div>
    </div>

    <form id="connexion" class="input-group" action="/frontend/code.php" method="POST">      
        <button type="submit">
            <svg width="92" height="92" viewBox="0 0 92 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle class="button" cx="46" cy="46" r="46"/>
                <path class="arrow" d="M46.069 55V37L62 46L46.069 55Z" />
                <path class="arrow" d="M46.069 37L46.8068 35.694C46.3424 35.4316 45.7736 35.4356 45.3129 35.7045C44.8522 35.9733 44.569 36.4666 44.569 37H46.069ZM46.069 55H44.569C44.569 55.5334 44.8522 56.0267 45.3129 56.2955C45.7736 56.5644 46.3424 56.5684 46.8068 56.306L46.069 55ZM62 46L62.7378 47.306C63.2088 47.0399 63.5 46.5409 63.5 46C63.5 45.4591 63.2088 44.9601 62.7378 44.694L62 46ZM29 44.5C28.1716 44.5 27.5 45.1716 27.5 46C27.5 46.8284 28.1716 47.5 29 47.5V44.5ZM40.3793 47.5C41.2077 47.5 41.8793 46.8284 41.8793 46C41.8793 45.1716 41.2077 44.5 40.3793 44.5V47.5ZM44.569 37V55H47.569V37H44.569ZM46.8068 56.306L62.7378 47.306L61.2622 44.694L45.3312 53.694L46.8068 56.306ZM62.7378 44.694L46.8068 35.694L45.3312 38.306L61.2622 47.306L62.7378 44.694ZM29 47.5H34.6897V44.5H29V47.5ZM34.6897 47.5H40.3793V44.5H34.6897V47.5Z"/>
            </svg>
        </button>
    </form>
</body>

</html>


