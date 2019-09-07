<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "create";
$json = [];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM plant"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    // foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
    //     echo $v;
    // }
    
    // $i=0;
    //    while($row = $stmt->fetchAll()) {
      
    //        $json[$i]=$row;
    //        $i++;
    //    }
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>