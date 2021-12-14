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
    gradient.addColorStop(1, "rgba(0, 0, 0, 0)");


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
                borderWidth: 3,
                fill: true,
            }]
        },
        options: {
            legend: {
                display: false
            },
            color:"white",
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                easing: "easeInOutQuad",
                duration: 2000
            },
            
        }
    });
    </script>
    </div>
    </center>');
}



?>