const ctx = document.getElementById('drawdown').getContext('2d');


change_mode()
const root = document.querySelector(":root");
const primary_color = getComputedStyle(root).getPropertyValue("--primary-color")
const accent_color = getComputedStyle(root).getPropertyValue("--accent-color")


const chart = new Chart(ctx, {
  type: 'bar',
  data:{
    labels: Array.from(Array(drawdown.length).keys()),
    datasets: [{
      label: 'Drawdown',
      data: drawdown,
      backgroundColor: getComputedStyle(document.querySelector(":root")).getPropertyValue("--primary-color"),
    }]
  }, 
  options:{
    plugins:{
      legend:{
        display: false,
      }
    },
    responsive: true,
    scales: {
      y:{
        grid:{
          display:false
        },
        ticks: {
            display:false,
        }
      },
      x:{
        grid:{
          display:false
        },
        color: accent_color,
        font:{
          weight: "bold",
        }
      }
    }
  }
});