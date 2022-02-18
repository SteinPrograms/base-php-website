const ctx = document.getElementById('drawdown').getContext('2d');


var root = document.querySelector(':root');
getComputedStyle(root).getPropertyValue('--accent-color');

const chart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: Array.from(Array(test.length).keys()),
    datasets: [{
      label: 'Drawdown',
      data: test,
      backgroundColor: getComputedStyle(root).getPropertyValue('--primary-color'),
    }]
  },
});