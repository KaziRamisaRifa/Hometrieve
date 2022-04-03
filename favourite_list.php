<?php
include 'connection.php';
session_start();
$userid = $_SESSION['userid'];

$sql = "SELECT * FROM favorites WHERE user_id='$userid'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)!= 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['house_id']." ".$row['land_id'];
        echo '<br>';
        $house_id = $row['house_id'];
        $land_id = $row['land_id'];
        $house_sql = "SELECT * FROM houses WHERE id='$house_id'";
        $land_sql = "SELECT * FROM lands WHERE id='$land_id'";
    
        $house_result = mysqli_query($conn, $house_sql);
        $land_result = mysqli_query($conn, $land_sql);
    
        while($house = mysqli_fetch_assoc($house_result)){
            echo $house['owner_name']." ".$house['owner_contact']." ".$house['purpose']." ".$house['type']." ".$house['location']." ".$house['address']." ".$house['area_size']." ".$house['price']." ".$house['beds'];
            echo '<br>';
        }
    
        while($land = mysqli_fetch_assoc($land_result)){
            echo $land['owner_name']." ".$land['owner_contact']." ".$land['location']." ".$land['address']." ".$land['area_size']." ".$land['price'];
            echo '<br>';
    
        }
    }

}
else{

    echo "No items in your favourite list!!";
}

?>