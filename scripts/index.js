



function change_mode(){
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        var newColorScheme = "dark";
    }

    else{
        var newColorScheme = "light";
    }


    


    var root = document.querySelector(':root');

    if (newColorScheme == "dark" ){
        root.style.setProperty('--bg-color', "#181818");
        root.style.setProperty('--accent-color', "0, 0, 0");
        root.style.setProperty('--primary-color', "#618DFF");
        root.style.setProperty('--secondary-color', "#FF7700");
    }
    else{
        root.style.setProperty('--bg-color', "#FFF");
        root.style.setProperty('--accent-color', "#181818");
        root.style.setProperty('--primary-color', "#618DFF");
        root.style.setProperty('--secondary-color', "#FF7700");
    }
    
}

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

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
    change_mode();
});

