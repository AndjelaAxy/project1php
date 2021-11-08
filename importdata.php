<!DOCTYPE html>
<html>
<head>

</head>
<body>

<a href="http://localhost/php_project/exportdata.php">Logout</a>
<br>
<h1>Contacts</h1>
<br>

<form action="connection.php" method="POST">

  <div>
    <label>First Name</label>
    <label>Last Name</label>
    <label>Phone Number</label>
  </div>
  <div id="input_fields">
    <div>
      <input type="text" name="first">
      <input type="text" name="last">
      <a href="">Delete</a>
      <input type="text" name="mob">
      <input type="text" name="num">
      <a href="">Delete</a>
    </div>
  </div>
  <div>
    <input type="button" onclick="addFunction()" value="Add">
    <input type="submit" value="Save">
  </div>

</form>

<script>

    function addFunction() {
    var y = document.getElementById('input_fields');
    var z = document.createElement("div");
    z.innerHTML = '<div><input type="text" name="first"><input type="text" name="last"><a href="">Delete</a><input type="text" name="mob"><input type="text" name="num"><a href="">Delete</a></div>';
    y.appendChild(z);
}

</script>


</body>
</html>
