<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            margin-bottom: 10px;
        }

        #location {
            font-weight: bold;
            font-size: 24px;
        }

        #temperature {
            font-size: 48px;
            margin-bottom: 20px;
        }

        #description {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>Weather App</h1>
    <div id="weather">
        <div id="location"></div>
        <div id="temperature"></div>
        <div id="description"></div>
    </div>

    <script>
        // Configura tu clave de API de OpenWeatherMap
        var apiKey = '55103935b479c3a77be0493c070df8d1';

        // Configura la ubicación para la cual deseas obtener el clima
        var location = 'Bogota,co';

        // Realiza la solicitud a la API de OpenWeatherMap
        fetch('https://api.openweathermap.org/data/2.5/weather?q=' + location + '&appid=' + apiKey)
            .then(response => response.json())
            .then(data => {
                // Extrae los datos relevantes del objeto de respuesta
                var locationName = data.name;
                var temperature = data.main.temp;
                var description = data.weather[0].description;

                // Convierte la temperatura de Kelvin a Celsius
                temperature = temperature - 273.15;

                // Muestra los datos en los campos correspondientes
                document.getElementById('location').textContent = locationName;
                document.getElementById('temperature').textContent = temperature + ' °C';
                document.getElementById('description').textContent = description;
            })
            .catch(error => {
                console.log('Error:', error);
            });
    </script>
</body>

</html>