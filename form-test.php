<?php
include 'connection.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hometrieve";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$location = $_POST['location'];
$purpose = $_POST['purpose'];
$type = $_POST['type'];

$sql = "SELECT * FROM houses WHERE location='$location' AND purpose='$purpose' AND type='$type';";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . " - Address: " . $row["address"] . " - Area Size: " . $row["area_size"] ."sqft". " - Price: " . $row["price"] ."tk". " - Beds: " . $row["beds"]." - Baths: " . $row["baths"];
    echo '<br>';
}
?>