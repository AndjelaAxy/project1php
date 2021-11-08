<!DOCTYPE html>
<html>
<head>
  <title>Admin login</title>

</head>
<body>
    <form action="authentication.php" method="POST">
    <p>
      <label for="user">Username:</label>
      <input type="text" name="user" id="user" required>
    </p>
    <p>
      <label for="pass">Password:</label>
      <input type="password" name="pass" id="pass" required>
    </p>
    <input type="submit" value="Log In">
    </form>
</body>
</html>
