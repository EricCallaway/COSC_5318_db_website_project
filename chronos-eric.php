<html>
<head>

</head>
<body>
<h1>Chronos Verified</h1>
<?php
echo 'Eric\'s Version<br>';

// Four variables to connect to the database
$host = "localhost";
$username = "afadmin_Hades";
$password = "SamHouston2022?";
$database_in_use = "afadmin_Chronos";

// Create a database object or instance
$mysqli = new mysqli($host, $username, $password, $database_in_use);

//
if ($mysqli -> connect_errno){
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli -> connect_errno;
}
echo $mysqli -> host_info . "<br>";

$sql = "SELECT id, first_name, last_name FROM customer";
$result = $mysqli->query($sql);

// if there are any values in the table, display them one at a time.
// This if statement evaluates as true if we get something back. There is something in the table.
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}
$mysqli->close();


?>


</body>
</html>








