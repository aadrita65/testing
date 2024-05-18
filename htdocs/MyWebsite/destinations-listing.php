<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pie Table</title>

</head>

<body id="travel-background">
    <header>
  <a href="index.html">
    <img src="https://cdn.glitch.global/81ee2d2d-7a63-4ee2-af83-a1cf2c2d0924/applepie.png?v=1715559431486" />
  </a>
  <nav>
  <div class="button"><a href="piegenerator.html">Pie Generator</a></div>
    <div class="button"><a href="pietable.html">Pie Table</a></div>
    <div class="button"><a href="piemap.html">Pie Map</a></div>
    </nav>
  </header>
    <h1 id="travelblog">Pie Table</h1>
     <p id="countries">Below you can find a few options of differents types of pies. Some are sweet and some are savory. Included with them are their recipes so you can check to see if you have the ingredients to make it! Hap-pie Searching!</p>
</header>

<div class="tables-container">
<?php
$servername = "localhost:3308";
$username = "dev17dbuser";
$password = "JEt1NQotE0GnHx4E";
$dbname = "dev17db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pie";
$result = $conn->query($sql);

 echo "<table>";
  echo "<tr><th>Name:</th><th>Type of Pie:</th><th>Ingredients:</th><th>URL:</th></tr>";
  while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['Destination'] . "</td>";
      echo "<td>" . $row['Country'] . "</td>";
      echo "<td>" . $row['Continent'] . "</td>";
      echo "<td>" . $row['URL'] . "</td>";
      echo "</tr>";
  }
  echo "</table>";

$conn->close();
?>

</div>

<div class="flex1"> 
     <div class="container3">
      <img  class="front1" src="https://cdn.glitch.global/81ee2d2d-7a63-4ee2-af83-a1cf2c2d0924/happie.jpeg?v=1715573568948"> 
     </div></div>

</body>
</html>