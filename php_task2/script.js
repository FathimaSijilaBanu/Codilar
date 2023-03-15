let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    let data = JSON.parse(this.responseText);
    displayData(data);
      }
    };
    xhr.open("GET", "food.php", true);
    xhr.send();
  function displayData(data) {
    let output = '';
    for (let i = 0; i < data.length; i++) {
      output += '<div class="food-item">';
      output += '<img src="' + data[i].picture + '">';
      output += '<h2>' + data[i].name + '</h2>';
      output += '<p>' + data[i].description + '</p>';
      output += '<p>Price: $' + data[i].price + '</p>';
      output += '</div>';
    }
    document.getElementById('food-items').innerHTML = output;
  }
  fetchData();
  