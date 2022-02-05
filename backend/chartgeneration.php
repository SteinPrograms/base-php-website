<?php

function chart($name,$dates,$values){
    $random_color1 =(rand(0, 255));
    $random_color2 =(rand(0, 255));
    $random_color3 =(rand(0, 255));
    echo('
    <canvas style="width:100%" id="'.$name.'"></canvas>
    <script>
    var '.$name.' = document.getElementById("'.$name.'").getContext("2d"),
        gradient = '.$name.'.createLinearGradient(0, 0, 0, 450);
    
    
    gradient.addColorStop(0, "#618DFF");
    gradient.addColorStop(0.2, "rgba(0, 0, 0, 0)");

    new Chart('.$name.',{
        type: "line",
        data: {
          labels:'.$dates.',
          datasets: [{
            color:"white",
            label: "Evolution du portfolio : '.$name.'",
            data: '.$values.',
            fill: false,
            borderColor: "rgba(255, 255, 255, 0.2)",
            borderWidth: 2,
            pointBackgroundColor: "transparent",
            pointBorderColor: "#FFFFFF",
            pointBorderWidth: 3,
            pointHoverBorderColor: "rgba(255, 255, 255, 0.2)",
            pointHoverBorderWidth: 10,
            lineTension: 0.3,
          }]},
          options: {
            plugins: {
              legend: {
                display: false,
              }
            },
            responsive: true,
            elements: { 
              point: {
                radius: 6,
                hitRadius: 6, 
                hoverRadius: 6 
              } 
            },
            scales: {
              y: {
                grid:{display:false},
                  ticks: {
                      color: "white",
                  }
                  },
                x: {
                  grid:{display:false},
                  ticks: {
                    // For a category axis, the val is the index so the lookup via getLabelForValue is needed
                    callback: function(val, index) {
                      // Hide every 4th tick label
                      label = this.getLabelForValue(val);
                      label = label.substring(5, 10);
                      return index % 2 === 0 ? label : "";
                    },
                    color: "white",
                  }
                }
              }
          
        }
      });
    </script>');
}



?>