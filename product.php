<?php

include 'konek.php';
// Connect to the MySQL database

// Retrieve the data from the database
$query = "SELECT District, COUNT(*) as JumlahNode FROM node_addr GROUP BY District";
$result = mysqli_query($conn, $query);

// Format the data for Chart.js
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = array(
        "label" => $row["District"],
        "value" => $row["JumlahNode"],
        "color" => "#" . substr(md5(rand()), 0, 6),
        "border" => 5,
        "skip" => false,
        "borderWidth" => 1
    );
}

// Create the Chart.js chart object
$chart_data = json_encode(
    array("labels" => array_column($data, "label"),
          "datasets" => array(
          array("data" => array_column($data, "value"),
          "borderRadius" => array_column($data, "border"),
          "borderSkipped" => array_column($data, "skip"),
          "borderWidth" => array_column($data, "borderWidth"),
          "backgroundColor" => array_column($data, "color")))));
?>