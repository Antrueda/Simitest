<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script>
 var densityCanvas = document.getElementById("densityChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'LÍNEA BASE',
  data: [427, 243, 514, 933, 326, 687],
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'RESTABLECIMIENTO DE DERECHOS',
  data: [3.7, 8.9, 9.8, 3.7, 23.1, 9.0],
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
  labels: ["Sociolegal", "Emprender", "Salud", "Sicosocial", "Espiritualidad", "Escuela"],
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});

</script>   