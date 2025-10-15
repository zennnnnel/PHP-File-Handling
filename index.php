<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Student Registration</h2>
    <form action="display.php" method="GET">
      <label>First Name:</label>
      <input type="text" name="fname" required>

      <label>Last Name:</label>
      <input type="text" name="lname" required>

      <label>Age:</label>
      <input type="number" name="age" required>

      <label>ID Number:</label>
      <input type="text" name="idn" required>

      <label>Department</label>
      <input type="text" name="dept" required>

      <button type="submit" class="register-btn">Register</button>
    </form>

    <form action="clear.php" method="GET">
      <button type="submit" class="clear-btn">Clear File</button>
    </form>
  </div>
</body>
</html>