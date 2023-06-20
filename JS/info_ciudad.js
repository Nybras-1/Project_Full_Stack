/*function getWeather() {

    const city = document.getElementById('city').value;
  
    fetch(`https://es.wikipedia.org/api/rest_v1/page/summary/${encodeURIComponent(city)}`)
        .then(response => response.json())
        .then(data => {
            const cityDescription = data.extract;
            document.getElementById('city_info').textContent = cityDescription;
        })
        .catch(error => {
            console.log('Error:', error);
        });
  } */


function getWeather() {
    const city = document.getElementById('city').value;
    const apiKey = '3cdfe44e54c75c5cd0c97ada267a062b';
    const weatherUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;
    const wikiUrl = `https://es.wikipedia.org/api/rest_v1/page/summary/${encodeURIComponent(city)}`;

    // Obtener información del clima
    fetch(weatherUrl)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById('temp').textContent = data.main.temp;
            document.getElementById('humidity').textContent = data.main.humidity;
            document.getElementById('wind-speed').textContent = data.wind.speed;
            document.getElementById('description').textContent = data.weather[0].description;
        })
        .catch(error => console.error(error));

    // Obtener información de la ciudad desde Wikipedia
    fetch(wikiUrl)
        .then(response => response.json())
        .then(data => {
            const cityDescription = data.extract;
            let maximcaracteres = cityDescription.slice(0, 880);
            //document.getElementById('city_info').textContent = cityDescription;
            document.getElementById('city_info').textContent = maximcaracteres;
            if (cityDescription.length > 880) {
                maximcaracteres += '...'; // Agregar puntos suspensivos si se supera el límite de 100 caracteres
            }
            document.getElementById('city_info').textContent = maximcaracteres;
        })
        .catch(error => {
            console.log('Error:', error);
        });
}
