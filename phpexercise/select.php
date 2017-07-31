<html>
<body>
<?php
$sname = "127.0.0.1";
$user = "root";
$pass = "root";
$db = "phpex";

// preping data for uploading
$v1 = $_POST["Airspace"];
$v2 = $_POST["Control_Surface"];
$v3 = $_POST["Deviation_Types"];

// Create connection
$conn = new mysqli($sname, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO selections (airspace, control_surface, deviation_types) VALUES ('$v1', '$v2', '$v3')";

// Upload the data to the DB and output success or error
if (mysqli_query($conn, $sql)) {
    echo "<h2>New record created successfully </h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
    
?>
<h2>These are your selections:<br></h2>
<?php echo $_POST["Airspace"]; ?><br>
<?php echo $_POST["Control_Surface"]; ?><br>
<?php echo $_POST["Deviation_Types"]; ?><br>
</body>
</html>