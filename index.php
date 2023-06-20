<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/home.css">
    <script src="../PROJECT/JS/info_ciudad.js"></script>
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
                <input type="text" id="city" required placeholder="Ingrese Ubicacion.....">
                <button class="buscador" onclick="getWeather()">Boton</button>
                <hr>
            </div>
            <div class="historial">
                <ul>
                    <li class="miga_pan">INFORMACION 1</li>
                    <li class="miga_pan">INFORMACION 2</li>
                    <li class="miga_pan">INFORMACION 3</li>
                    <li class="miga_pan">INFORMACION 4</li>
                </ul>
                <hr>
            </div>
            <div class="clima">
                <p class="detalleclima">Detalles del Clima</p>
                <table>
                    <tr>
                        <td>temperatura actuall</td>
                        <td Id="temp"></td>
                    </tr>
                    <tr>
                        <td>velocidad del viento</td>
                        <td id="wind-speed"></td>
                    </tr>
                    <tr>
                        <td>Humedad</td>
                        <td id="humidity"></td>
                    </tr>
                </table>
                <hr>
            </div>
            <!-- id="city_info"-->
            <p class="descripticion">CIUDAD</p>
            <div  id="city_info"></div>
            <!-- class="detalle_descriptcion" -->
            <!-- <p> Bogotá es la extensa capital en altura de Colombia. La Candelaria, su centro con adoquines,
                    cuenta con sitios coloniales como el Teatro Colón neoclásico y la Iglesia de San Francisco del siglo XVII.
                    También alberga museos populares, incluido el Museo Botero, que exhibe arte de Fernando Botero, y el Museo del Oro,
                    con piezas de oro precolombinas,</p> -->
            <!--<button onclick="getWeather()">Obtener información de la ciudad</button> -->

        </section>

    </main>


</body>

</html>