<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "create";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $color = $conn->prepare("SELECT plant.p_id,plant.p_species,plant.p_genus,plant.p_alias,color.color,plant.p_icon,plant.p_description
    FROM plant
    INNER JOIN color ON plant.p_color = color.id;");
    $color->execute();
    // set the resulting array to associative
    $result = $color->setFetchMode(PDO::FETCH_ASSOC); 
    echo json_encode($color->fetchAll());
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>