<!DOCTYPE html>
<html>

<head>
    <title>Gráfico de Pizza Dinâmico em Círculo</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 300px;
        }
    </style>
</head>

<body>
    <div class="chart-container">
        <canvas id="chart0" class="chart" width="100" height="100"></canvas>
        <canvas id="chart1" class="chart" width="100" height="100"></canvas>
        <canvas id="chart2" class="chart" width="100" height="100"></canvas>
        <canvas id="chart3" class="chart" width="100" height="100"></canvas>
        <canvas id="chart4" class="chart" width="100" height="100"></canvas>
        <canvas id="chart5" class="chart" width="100" height="100"></canvas>
        <canvas id="chart6" class="chart" width="100" height="100"></canvas>
        <canvas id="chart7" class="chart" width="100" height="100"></canvas>
        <canvas id="chart8" class="chart" width="100" height="100"></canvas>
        <canvas id="chart9" class="chart" width="100" height="100"></canvas>
    </div>

    <script>
        var charts = [];

        // Crie um gráfico de pizza para cada parte do círculo
        for (var i = 0; i < 10; i++) {
            var canvas = document.getElementById('chart' + i);
            var angle = i * Math.PI / 5;
            var x = Math.cos(angle) * 100 + 150;
            var y = Math.sin(angle) * 100 + 150;
            var chart = new Chart(canvas, {
                type: 'pie',
                data: {
                    labels: ['', ''],
                    datasets: [{
                        data: [0, 10],
                        backgroundColor: ['#FFFFFF', '#95A5A6']
                    }]
                },
                options: {
                    cutoutPercentage: 90,
                    tooltips: {
                        enabled: false
                    },
                    animation: {
                        duration: 0
                    },
                    legend: {
                        display: false
                    }
                }
            });
            canvas.style.left = x + 'px';
            canvas.style.top = y + 'px';
            charts.push(chart);
        }

        function updateChart() {
            // Atualize cada gráfico com a pontuação da categoria correspondente
            for (var i = 0; i < 10; i++) {
                var categoryValue = document.getElementById('category' + i).value;
                charts[i].data.datasets[0].data[0] = categoryValue;
                charts[i].data.datasets[0].data[1] = 10 - categoryValue;
                charts[i].update();
            }
        }
    </script>
</body>