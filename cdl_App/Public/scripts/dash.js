const labels = 
[
  'January',
  'February',
  'March',
  'April',
  'May',
  'June',
];

const data = 
{
  labels: labels,
   datasets: [{
    label: 'Monthly Stats',
    backgroundColor:[ 'red', 'green', 'yellow', 'blue'],
    color: 'white',
    data: [0, 10, 5, 2, 20, 30],
  }]
};

const config = 
{
  type: 'bar',
  data: data,
  options: {}
};

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

  
  const config2 = 
{
  type: 'doughnut',
  data: data,
  options: {}
};

  const myChart2 = new Chart(
    document.getElementById('myChart2'),
    config2
  );