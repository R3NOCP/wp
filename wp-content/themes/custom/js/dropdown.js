function myFunction() {
  var x = document.getElementById("citySelect").value;
  document.getElementById("city").innerHTML = "You selected: " + x;
  refreshWeatherData(x);

  if (x === "Amsterdam")
     document.getElementById("imgselect").setAttribute("src", "http://localhost:8080/wp/wp-content/uploads/2019/06/amsterdam.png");

  else if  (x === "Assen")
      document.getElementById("imgselect").setAttribute("src", "http://localhost:8080/wp/wp-content/uploads/2019/06/Assen.png");

  else if (x === "Groningen")
          document.getElementById("imgselect").setAttribute("src", "http://localhost:8080/wp/wp-content/uploads/2019/06/groningen.png");

  else if (x === "Utrecht")
              document.getElementById("imgselect").setAttribute("src", "http://localhost:8080/wp/wp-content/uploads/2019/06/utrecht.png");

  else if (x === "Select your city")
                          document.getElementById("imgselect").setAttribute("src", "http://localhost:8080/wp/wp-content/uploads/2019/06/amsterdam.png");

       }
