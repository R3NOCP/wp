const app = document.getElementById('liveweer');

const container = document.createElement('div');
container.setAttribute('class', 'container');

app.appendChild(container);

refreshWeatherData('Select your city');

function refreshWeatherData(cityName){
    var xhr = new XMLHttpRequest()
    xhr.open('GET', 'https://weerlive.nl/api/json-data-10min.php?key=f97777689c&locatie=' + cityName, true)
    xhr.onload = function () {
        // Begin accessing JSON data here
        var data = JSON.parse(xhr.responseText)
        if (xhr.status >= 200 && xhr.status < 400) {
            data.liveweer.forEach(liveweer => {
                const card = document.getElementById("weather-info");
                card.innerHTML = '';
                card.setAttribute('class', 'card');

                const h2 = document.createElement('h2');
                h2.textContent = liveweer.plaats;

                const h1 = document.createElement('h1');
                h1.textContent = liveweer.temp;

                const p = document.createElement('p');
                p.setAttribute("id", "p1");
                p.textContent = liveweer.samenv;

                container.appendChild(card);
                card.appendChild(h2);
                card.appendChild(h1);
                card.appendChild(p);

            })
        } else {
            const errorMessage = document.createElement('marquee');
            errorMessage.textContent = `Oops!`;
            app.appendChild(errorMessage);
        }
    }

    xhr.send();
}
