document.addEventListener('DOMContentLoaded', function () {
    // Obtener el contexto del lienzo
    var canvas = document.getElementById('myChart');
    var ctx = canvas.getContext('2d');

    // Definir los datos y opciones del gráfico
    var data = {
        labels: ['Velocidad Viento', 'Dirección Viento', 'Ráfaga Viento'],
        datasets: [{
            data: [11, 2, 2],
            backgroundColor: ['red', 'blue', 'green']
        }]
    };

    var options = {
        responsive: true,
        legend: {
            position: 'bottom',
        },
        title: {
            display: true,
            text: 'Pie Chart'
        }
    };

    // Crear una nueva instancia del gráfico de tarta
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });

    // Agregar el evento al botón para obtener el clima y actualizar el gráfico
    document.getElementById('btnWeather').addEventListener('click', function () {
        getWeather2();

        // Definir la función getWeather2 dentro del evento click
        function getWeather2() {
            const city = document.getElementById('city').value;
            const apiKey = '3cdfe44e54c75c5cd0c97ada267a062b';
            const weatherUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;
            const wikiUrl = `https://es.wikipedia.org/api/rest_v1/page/summary/${encodeURIComponent(city)}`;

            // Obtener información del clima
            fetch(weatherUrl)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    document.getElementById('humidity').textContent = data.main.humidity;
                    document.getElementById('temp').textContent = data.main.temp;
                    document.getElementById('speed').textContent = data.wind.speed;
                    document.getElementById('temp_max').textContent = data.main.temp_max;
                    document.getElementById('deg').textContent = data.wind.deg;
                    document.getElementById('gust').textContent = data.wind.gust;

                    // Actualizar los datos del gráfico de tarta
                    myChart.data.datasets[0].data = [data.wind.speed, data.wind.deg, data.wind.gust];
                    myChart.update();
                })
                .catch(error => console.error(error));
        }
    });
});
