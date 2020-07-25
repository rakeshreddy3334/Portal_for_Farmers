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
$OrdID=intval($_POST["Id"]);
$sql = "SELECT Custname,OrderID,Name_of_the_item,location FROM Customer WHERE OrderID=$OrdID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table><tr><td>Customer name: </td><td>". $row["Custname"] ."</td></tr><tr><td>OrderID:</td><td> " . $row["OrderID"] ." </td></tr><tr><td>Name_of_the_item:  </td><td> " .$row["Name_of_the_item"] ."</td></tr><tr><td> City: </td><td>". $row["location"] ."</td></tr></table>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 