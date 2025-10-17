<?php
// --- Handle registration from index.php ---
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["fname"])) {
  $fname = $_GET["fname"];
  $lname = $_GET["lname"];
  $idn = $_GET["idn"];
  $course = $_GET["course"];

  // Combine the data
  $data = $fname . " " . $lname . "|" . $idn . "|" . $course . "\n";

  // Save to file (append mode)
  $file = fopen("students.txt", "a");
  fwrite($file, $data);
  fclose($file);

  // Redirect to avoid duplicate data when refreshing
  header("Location: display.php");
  exit();
}

// --- Read student records ---
$students = array();

if (file_exists("students.txt")) {
  $file = fopen("students.txt", "r");

  while (!feof($file)) {
    $line = trim(fgets($file));
    if ($line != "") {
      $parts = explode("|", $line);
      $fullname = $parts[0];
      $student_id = $parts[1];
      $course = $parts[2];

      $students[] = array($fullname, $student_id, $course);
    }
  }

  fclose($file);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Homepage</title>
  <style>
    body {
      font-family: serif;
      font-variant: small-caps;
      background-color: #233d4d;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
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
    a {
      display: block;
      text-align: center;
      margin-top: 10px;
      text-decoration: none;
      color: #233d4d;
    }
    .clear-btn {
      background-color: #e74c3c;
    }
    .clear-btn:hover {
      background-color: #ff1900ff;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Registered Students</h2>

    <?php
    if (count($students) == 0) {
      echo "<p>No student records found.</p>";
    } else {
      for ($i = 0; $i < count($students); $i++) {
        echo "<div style='border-bottom: 1px solid #ccc; margin-bottom:10px; padding-bottom:10px;'>";
        echo "<p><strong>Full Name:</strong> " . htmlspecialchars($students[$i][0]) . "</p>";
        echo "<p><strong>Student ID:</strong> " . htmlspecialchars($students[$i][1]) . "</p>";
        echo "<p><strong>Course:</strong> " . htmlspecialchars($students[$i][2]) . "</p>";
        echo "</div>";
      }
    }
    ?>

    <form action="clear.php" method="POST">
      <button type="submit" class="clear-btn">Clear All Records</button>
    </form>

    <a href="index.php">Go Back to Registration</a>
  </div>
</body>
</html>
