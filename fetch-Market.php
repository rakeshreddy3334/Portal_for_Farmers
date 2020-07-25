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
$OrdID=intval($_POST["cname"]);
$sql = "SELECT fname,State,Market,crops FROM sellMarket WHERE crops=$OrdID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table><tr><td>Availble Products: Seller Name </td><td>". $row["fname"] ."</td></tr><tr><td>State of Seller</td><td> " . $row["State"] ." </td></tr><tr><td>Name_of_the_Market  </td><td> " .$row["Market"] ."</td></tr><tr><td> Crops Available: </td><td>". $row["crops"] ."</td></tr></table>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 