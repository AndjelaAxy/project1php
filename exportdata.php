<!DOCTYPE html>
<html>

<head>
<title>Data table</title>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<a href="http://localhost/php_project/includes/admin.php">Admin</a>

<?php
$servername = "localhost";
$username = "root";
$password = "andjelaroot96";
$dbname = "contacts";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM names";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Firstname</th><th>Lastname</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>

</body>
</html>
