<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $temperature = $_POST['temperature'];
  $units = $_POST['units'];
  $convertedTemperature = 0;

  echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konversi Suhu</title>
  <style>
    body,
    html {
      height: 50%;
      margin: 0;
      font: bold 16px \'Roboto\', sans-serif;
      background-color: #343A40;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #212529;
    }

    .card {
      background-color: #212529;
      justify-content: center;
      box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: auto;
      border-radius: 20px;
      padding: 20px;
      color: white;
    }

    .card:hover {
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>
  <div class="card" role="region" aria-label="Temperature Conversion Card">
    <h1>Konversi Suhu</h1>
';

switch ($units) {
    case 'celsius':
      // Convert to Fahrenheit
      $convertedTemperature = ($temperature * 9/5) + 32;
      echo "Fahrenheit: " . $convertedTemperature . " °F<br>";
      // Convert to Kelvin
      $convertedTemperature = $temperature + 273.15;
      echo "Kelvin: " . $convertedTemperature . " K<br>";
      // Convert to Reamur
      $convertedTemperature = $temperature * 4/5;
      echo "Reamur: " . $convertedTemperature . " °R<br>";
      // Convert to Rankine
      $convertedTemperature = ($temperature + 273.15) * 9/5;
      echo "Rankine: " . $convertedTemperature . " °Ra<br>";
      break;
    case 'fahrenheit':
      // Convert to Celsius
      $convertedTemperature = ($temperature - 32) * 5/9;
      echo "Celsius: " . $convertedTemperature . " °C<br>";
      // Convert to Kelvin
      $convertedTemperature = ($temperature + 459.67) * 5/9;
      echo "Kelvin: " . $convertedTemperature . " K<br>";
      // Convert to Reamur
      $convertedTemperature = ($temperature - 32) * 4/9;
      echo "Reamur: " . $convertedTemperature . " °R<br>";
      // Convert to Rankine
      $convertedTemperature = $temperature + 459.67;
      echo "Rankine: " . $convertedTemperature . " °Ra<br>";
      break;
   case 'kelvin':
      // Convert to Celsius
      $convertedTemperature = $temperature - 273.15;
      echo "Celsius: " . $convertedTemperature . " °C<br>";
      // Convert to Fahrenheit
      $convertedTemperature = ($temperature * 9/5) - 459.67;
      echo "Fahrenheit: " . $convertedTemperature . " °F<br>";
      // Convert to Reamur
      $convertedTemperature = ($temperature - 273.15) * 0.8;
      echo "Reamur: " . $convertedTemperature . " °R<br>";
      // Convert to Rankine
      $convertedTemperature = $temperature * 9/5;
      echo "Rankine: " . $convertedTemperature . " °Ra<br>";
      break;
   case 'reamur':
      // Convert to Celsius
      $convertedTemperature = $temperature / 0.8;
      echo "Celsius: " . $convertedTemperature . " °C<br>";
      // Convert to Fahrenheit
      $convertedTemperature = ($temperature * 2.25) + 32;
      echo "Fahrenheit: " . $convertedTemperature . " °F<br>";
      // Convert to Kelvin
      $convertedTemperature = ($temperature / 0.8) + 273.15;
      echo "Kelvin: " . $convertedTemperature . " K<br>";
      // Convert to Rankine
      $convertedTemperature = ($temperature * 2.25) + 491.67;
      echo "Rankine: " . $convertedTemperature . " °Ra<br>";
      break;
   case 'rankine':
      // Convert to Celsius
      $convertedTemperature = ($temperature - 491.67) * 5/9;
      echo "Celsius: " . $convertedTemperature . " °C<br>";
      // Convert to Fahrenheit
      $convertedTemperature = $temperature - 459.67;
      echo "Fahrenheit: " . $convertedTemperature . " °F<br>";
      // Convert to Kelvin
      $convertedTemperature = $temperature * 5/9;
      echo "Kelvin: " . $convertedTemperature . " K<br>";
      // Convert to Reamur
      $convertedTemperature = (($temperature / 1.8) - 273.15) * 0.8;
      echo "Reamur: " . $convertedTemperature . " °R<br>";
      break;
}

echo '<button onclick="goHome()" style="background-color: #343A40; 
      color: white; 
      border: none; 
      cursor: pointer; 
      padding: 10px 24px; 
      transition: 0.3s;">Kembali</button>
  <script>
    function goHome() {
      window.location.href="konversi_suhu.html";
    }
  </script>
  </div>
</body>
</html>';
}
?>