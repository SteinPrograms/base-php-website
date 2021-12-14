<?php

function chart($name,$dates,$values){
    $random_color1 =(rand(0, 255));
    $random_color2 =(rand(0, 255));
    $random_color3 =(rand(0, 255));
    echo('<center><div style="width:75%;height:50%">
    <canvas id="'.$name.'"></canvas>
    <script>
    
    var '.$name.' = document.getElementById("'.$name.'").getContext("2d");
    var gradient = chart.createLinearGradient(0, 0, 0, 450);
    gradient.addColorStop(0, "rgba(255, 0,0, 0.5)");
    gradient.addColorStop(0.5, "rgba(255, 0, 0, 0.25)");
    gradient.addColorStop(1, "rgba(255, 0, 0, 0)");


    new Chart('.$name.', {
        type: "line",
        data: {
            labels:'.$dates.',
            datasets: [{
                label: "Evolution du portfolio : '.$name.'",
                data: '.$values.',
                backgroundColor: gradient,
                borderColor: "rgba('.$random_color1.', '.$random_color2.', '.$random_color3.', 1)",
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
    </div>
    </center>');
}



?>