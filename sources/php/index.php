<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    margin-left:auto;
    margin-right:auto;
}
h1, p, div, h2, h3, h4 {text-align: center;}

</style>
</head>
<body>

<?php
$servername = "mysql";
$username = "root";
$password = "UdxHGXatiHLiZmu1C71";
$dbname = "classicmodels";
$name = "Netea";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT orderNumber,orderDate,status,comments FROM orders WHERE comments IS NOT NULL LIMIT 10";
$result = $conn->query($sql);
echo "<h1> Hello " . $name . " from Karov! </h1>";

echo "<h3> Here is result of the MYSQL query: </h3>";
if ($result->num_rows > 0) {
    echo "<table><tr><th>orderNumber</th><th>orderDate</th><th>status</th><th>comments</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["orderNumber"]. "</td><td>" . $row["orderDate"]. "</td><td>" . $row["status"]. "</td><td>" . $row["comments"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();


echo "<h3> Here is result of the Mongodb query: </h3>";

# constructing a to a remote server and querry and limiting the result to the latest 3 results

$username ="kairos";
$password = "T8AuMw1ak4LBp9enDUZK";

$manager = new MongoDB\Driver\Manager("mongodb://mongo/",
     array("username" => $username, "password" => $password )
    );   

# setting your options and filter
$filter  = ['id' => ['$gt' => 120]];
$options = ['sort'=>array('_id'=>-1),'limit'=>20]; # limit -1 from newest to oldest

#constructing the querry
$query = new MongoDB\Driver\Query($filter, $options);

#executing
$cursor = $manager->executeQuery('mongo.samples_pokemon', $query);

foreach ($cursor as $document) {
    //var_dump($document);
    print_r($document);
}


?>



</body>
</html>