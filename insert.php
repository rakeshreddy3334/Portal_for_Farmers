<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Farmername=$_POST["Id1"];
$State=intval($_POST["Id2"]);
$Acres=$_POST["Id3"];
$crops=$_POST["Id4"];
$Loan=$_POST["Id5"];
$Subs=$_POST["Id6"];

$sql = "INSERT INTO farmerdetails VALUES('$Farmername','$State','$Acres','$crops','$Loan','$Subs')";
if ($conn->query($sql) === TRUE) {
    ?> 
    <h1 align="center">Thank you for sumbiting your query</h1>
    <?php
} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 