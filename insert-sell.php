<?php
$servername = "localhost";
$username = "id13571852_farmer_user_portal";
$password = "Rakesh@12345678";
$dbname = "id13571852_famer_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Farmername=$_POST["name1"];
$State=$_POST["Id2"];
$Market=$_POST["Id3"];
$crops=$_POST["Id4"];

$sql = "INSERT INTO sellMarket VALUES('$Farmername','$State','$Market','$crops')";
if ($conn->query($sql) === TRUE) {
    ?> 
    <h1 align="center">Thank you for shopping with us</h1>
    <p>click here to go home </p> <a href = "index.html">HOME</a>
    <?php
} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 