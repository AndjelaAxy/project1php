<!DOCTYPE html>
<html>

<head>
<title>Data table</title>
<style>
table{
  border-collapse: collapse;
  width: 80%;
  margin: auto;
}
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
a {
  text-decoration: none;
  padding: 10px;
  background-color: dodgerblue;
  color: white;
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

$sql = "SELECT name_id, firstname, lastname, mobile, num FROM names";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Phone</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name_id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["mobile"]. "</td><td>" . $row["num"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>

</body>
</html>
