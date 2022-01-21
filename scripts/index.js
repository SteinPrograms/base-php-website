



function change_mode(){
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        var newColorScheme = "dark";
    }

    else{
        var newColorScheme = "light";
    }
    var body = document.querySelector('body');
    var h1 = document.querySelector('h1');
    var password_text = document.querySelector('#password-reveal-text');
    var input_fields = document.querySelectorAll('.input-field');
    
    var eye = document.querySelector('#eye');
    if (newColorScheme == "light" ){
        body.style.background = '#fff';
        h1.style.color = '#000';
        password_text.style.color = '#000';
        eye.style.color = '#000';
        input_fields.forEach(function colorchange(input_field){
            input_field.style.background = '#000';
            input_field.style.color = '#fff';
        });
        
    }
    else{
        input_fields.forEach(function colorchange(input_field){
            input_field.style.background = '#fff';
            input_field.style.color = '#000';
        });
        body.style.background = '#000';
        h1.style.color = '#fff';
        password_text.style.color = '#fff';
        eye.style.color = '#fff';
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

