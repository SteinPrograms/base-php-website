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
    gradient.addColorStop(0.35, "rgba(0, 0, 0, 0)");

    new Chart('.$name.',{
        type: "line",
        data: {
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
            plugins: {
                legend: {
                  display: false,
                }
              },
            responsive: true,
            scales: {
            y: {
                ticks: {
                    color: "white",
                }
                },
              x: {
                ticks: {
                  // For a category axis, the val is the index so the lookup via getLabelForValue is needed
                  callback: function(val, index) {
                    // Hide every 4th tick label
                    label = this.getLabelForValue(val);
                    label = label.substring(0, 4);
                    return index % 4 === 0 ? label : "";
                  },
                  color: "white",
                }
              }
            }
        }});
    </script>
    </div>
    </center>');
}



?>