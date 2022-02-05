<?php

function chart($name,$dates,$values){
    echo('
    <canvas style="width:100%" id="'.$name.'"></canvas>
    <script>

      var '.$name.' = document.getElementById("'.$name.'").getContext("2d");

      new Chart('.$name.',{
          type: "line",
          data: {
            labels:'.$dates.',
            datasets: [{
              color:"white",
              label: "Evolution du portfolio : '.$name.'",
              data: '.$values.',
              fill: false,
              borderColor: "#618DFF",
              borderWidth: 2,
              pointBackgroundColor: "transparent",
              pointBorderColor: "#618DFF",
              pointBorderWidth: 3,
              pointHoverBorderColor: "#618DFF",
              pointHoverBorderWidth: 10,
              lineTension: 0.4,
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
                        display:false,
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
                      color: getComputedStyle(document.querySelector(":root")).getPropertyValue("--accent-color"),
                      font: {
                        weight: "bold",
                    }
                    }
                  }
                }
            
          }
        });
      </script>
      
      ');
}



?>