const ctx = document.getElementById('drawdown').getContext('2d');

change_mode()

const chart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: Array.from(Array(drawdown.length).keys()),
    datasets: [{
      label: 'Drawdown',
      data: drawdown,
      backgroundColor: getComputedStyle(document.querySelector(":root")).getPropertyValue("--primary-color"),
    }]
  },
});