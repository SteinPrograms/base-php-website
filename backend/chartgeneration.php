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

    gradient.addColorStop(0, "#B4E845");
    gradient.addColorStop(1, "rgba(0, 0, 0, 0)");


    new Chart('.$name.',{
        type: "line",
        data: {
            labels:'.$dates.',
            datasets: [{
                label: "Evolution du portfolio : '.$name.'",
                data: '.$values.',
                backgroundColor: gradient,
                borderColor: "#B4E845",
                borderWidth: 3,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                easing: "easeInOutQuad",
                duration: 1000
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