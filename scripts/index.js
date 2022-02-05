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
        root.style.setProperty('--accent-color', "rgb(255, 255, 255)");
        root.style.setProperty('--primary-color', "#618DFF");
        root.style.setProperty('--secondary-color', "#FF7700");
        root.style.setProperty('--gray-color', "#ADADAD");
    }
    else{
        root.style.setProperty('--bg-color', "#FFF");
        root.style.setProperty('--accent-color', "#181818");
        root.style.setProperty('--primary-color', "#618DFF");
        root.style.setProperty('--secondary-color', "#FF7700");
        root.style.setProperty('--gray-color', "#ADADAD");
    }
}


window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
    change_mode();
});

