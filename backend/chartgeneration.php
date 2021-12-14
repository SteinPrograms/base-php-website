<?php

function chart($name,$dates,$values){
    $random_color1 =(rand(0, 255));
    $random_color2 =(rand(0, 255));
    $random_color3 =(rand(0, 255));
    echo('<center><div style="width:75%;height:50%">
    <canvas id="'.$name.'"></canvas>
    <script>
    var '.$name.' = document.getElementById("'.$name.'").getContext("2d"),
        gradient = '.$name.'.createLinearGradient(0, 0, 0, 450);

    gradient.addColorStop(0, #0E4623);
    gradient.addColorStop(0.5, #0E4623);
    gradient.addColorStop(1, #0E4623);


    new Chart('.$name.',{
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
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                easing: "easeInOutQuad",
                duration: 520
            },
            scales: {
                xAxes: [{
                    title: {
                        display: true,
                        text: "Month"
                    }
                }],
                yAxes: [{
                    gridLines: {
                        color: "rgba(200, 200, 200, 0.08)",
                        lineWidth: 1
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0.4
                }
            },
            legend: {
                display: false
            },
            point: {
                backgroundColor: "white"
            },
            tooltips: {
                titleFontFamily: "Open Sans",
                backgroundColor: "rgba(0,0,0,0.3)",
                titleFontColor: "red",
                caretSize: 5,
                cornerRadius: 2,
                xPadding: 10,
                yPadding: 10
            }
        }
    });
    </script>
    </div>
    </center>');
}



?>