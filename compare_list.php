<?php
include 'connection.php';
session_start();
$userid = $_SESSION['userid'];

$sql = "SELECT * FROM compare_list WHERE user_id='$userid'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo $row['house_id']." ".$row['land_id'];
}

?>