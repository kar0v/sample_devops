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
$servername = "127.0.0.1";
$username = "ezekiel";
$password = "3VpNd2BEnhkVrHd5DYh";
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

$conn = new MongoClient("mongodb://kairos:T8AuMw1ak4LBp9enDUZK@127.0.0.1:27017/mongo");
echo "Connection to database successfully";
 
// select a database
$db = $m->mongo;
echo "Database mongo selected";
$collection = $db->samples_pokemon;
echo "Collection selected succsessfully";
$cursor = $collection->find();
// iterate cursor to display title of documents
 
foreach ($cursor as $document) {
   echo $document["title"] . "\n";
}

?>



</body>
</html>