<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: serif;
      font-variant: small-caps;
      margin: 0;
      padding: 0;
      background-color: #233d4d;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      background-color: #FE7F2D;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 500px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
    display: block;
    margin-top: 10px;
    }

    input {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    }

    button {
    margin-top: 15px;
    width: 100%;
    padding: 10px;
    border: none;
    background-color: #233d4d;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    }

    button:hover {
    background-color: #f56200;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Student Registration</h2>
    <form action="display.php" method="GET">
      <label>First Name:</label>
      <input type="text" name="fname" required>

      <label>Last Name:</label>
      <input type="text" name="lname" required>

      <label>Student ID:</label>
      <input type="number" name="idn" required>

      <label>Course:</label>
      <input type="text" name="course" required>

      <button type="submit" class="register-btn">Register</button>
    </form>
  </div>
</body>
</html>
