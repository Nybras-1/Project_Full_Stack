<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/home.css">
    <title>INDEX</title>
</head>

<body>
    <main>
        <header>
            <section>
                <div class="menu">
                    <nav>
                        <ul class="lista">
                            <li><a href="#"><img class="menu_sombrilla" src="IMAGE/sombrilla.png" alt="Inicio"><!--INICIO --></a></li>
                            <li><a href="#"><img class="login" src="IMAGE/Login.png" alt="Inicio"><!--LOGIN --></a></li>
                            <li><a href="#"><img class="mapa" src="IMAGE/mapa.png" alt="Inicio"><!--MAPA --></a></li>
                            <li><a href="#"><img class="dasboard" src="IMAGE/contact.png" alt="Inicio"><!--DASBOARD --></a></li>
                            <li></li>
                        </ul>
                    </nav>
                </div>
            </section>
        </header>
        <section id="information">
            <div class="busqueda">
                <input type="text" id="ubicacion"  placeholder="Ingrese Ubicación...">
                <button class="buscador" onclick="buscarClima()">Boton</button>
                <p>Ingrese Ubicación...</p>
                <hr>
            </div>
            <div class="historial">
                <ul>
                    <li class="miga_pan">INFORMACION 1</li>
                    <li class="miga_pan">INFORMACION 22</li>
                    <li class="miga_pan">INFORMACION 3</li>
                    <li class="miga_pan">INFORMACION 4</li>
                </ul>
                <hr>
            </div>
            <div class="clima">
                <p class="detalleclima">Detalles del Clima</p>
                <table>
                    <tr>
                        <td>precipitaciones</td>
                        <td class="deta_clima">70%</td>
                    </tr>
                    <tr>
                        <td>Humedad</td>
                        <td class="deta_clima">54%</td>
                    </tr>
                    <tr>
                        <td>VIENTOS</td>
                        <td class="deta_clima">8KM/H</td>
                    </tr>
                </table>
                <hr>
            </div>
            <div>
                <p class="descripticion">BOGOTÁ</p>
                <p class="detalle_descriptcion">Bogotá es la extensa capital en altura de Colombia. La Candelaria, su centro con adoquines,
                    cuenta con sitios coloniales como el Teatro Colón neoclásico y la Iglesia de San Francisco del siglo XVII.
                    También alberga museos populares, incluido el Museo Botero, que exhibe arte de Fernando Botero, y el Museo del Oro,
                    con piezas de oro precolombinas,</p>
            </div>
        </section>
        <script>
            function buscarClima() {
                var ubicacionInput = document.getElementById('ubicacion');
                var ubicacion = ubicacionInput.value;
                var apiKey = '55103935b479c3a77be0493c070df8d1'; // Reemplaza con tu clave de API WeatherAPI

                // Realizar solicitud a la API
                fetch('https://api.weatherapi.com/v1/current.json?key=' + apiKey + '&q=' + ubicacion)
                    .then(response => response.json())
                    .then(data => {
                        // Mostrar información en los campos correspondientes
                        document.getElementById('precipitaciones').textContent = data.current.precip_mm + ' mm';
                        document.getElementById('humedad').textContent = data.current.humidity + '%';
                        document.getElementById('vientos').textContent = data.current.wind_kph + ' km/h';
                        document.getElementById('ubicacion-title').textContent = data.location.name;
                        document.getElementById('ubicacion-description').textContent = data.location.description;

                        // Agregar la ubicación al historial
                        var historialList = document.getElementById('historial-list');
                        var historialItem = document.createElement('li');
                        historialItem.textContent = data.location.name;
                        historialList.appendChild(historialItem);
                    })
                    .catch(error => {
                        console.log('Error:', error);
                    });
            }
        </script>

    </main>


</body>

</html>