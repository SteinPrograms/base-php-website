const ctx1 = document.getElementById('portfolio').getContext('2d');



const chart1 = new Chart(ctx1,{
  type: "line",
  data: {
    labels:dates,
    datasets: [{
      color:"white",
      label: "Evolution du portfolio",
      data: values,
      fill: false,
      borderColor: primary_color,
      borderWidth: 2,
      pointBackgroundColor: "transparent",
      pointBorderColor: primary_color,
      pointBorderWidth: 3,
      pointHoverBorderColor: primary_color,
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
              color: accent_color,
              font: {
                weight: "bold",
            }
            }
          }
        }
    
  }
});