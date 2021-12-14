<?php

function chart($name,$dates,$values){
    $random_color1 =(rand(0, 255));
    $random_color2 =(rand(0, 255));
    $random_color3 =(rand(0, 255));
    echo('<center><div style="width:100%;height:100%">
    <canvas id="'.$name.'"></canvas>
    <script>
    var '.$name.' = document.getElementById("'.$name.'").getContext("2d"),
        gradient = '.$name.'.createLinearGradient(0, 0, 0, 450);
    
    
    gradient.addColorStop(0, "#B4E845");

    gradient.addColorStop(0.25, "rgba(0, 0, 0, 0)");


    new Chart('.$name.',{
        type: "line",
        data: {
            color:"white",
            labels:'.$dates.',
            datasets: [{
                color:"white",
                label: "Evolution du portfolio : '.$name.'",
                data: '.$values.',
                backgroundColor: gradient,
                borderColor: "#B4E845",
                borderWidth: 1.5,
                fill: true,
            }]
        },
        options: {
            color:"white",
            animation: {
                easing: "easeInOutQuad",
                duration: 1000
            },
        }
    });
    </script>
    </div>
    </center>');
}



?>