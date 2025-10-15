<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
<body>
     <div class="container1">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['fname'])) {
        // Get values from form
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $age   = $_GET['age'];
        $idn   = $_GET['idn'];
        $dept  = $_GET['dept'];

        // Save to file
        $data = "Full Name: $fname $lname | Age: $age | ID: $idn | Department: $dept\n";
        file_put_contents("students.txt", $data, FILE_APPEND);
        
        // Show confirmation
        echo "<h1>University of Cebu</h1>";
        echo "Full Name: $fname $lname <br>";
        echo "Age: $age <br>";
        echo "ID Number: $idn <br>";
        echo "Department: $dept <br>";
        
        echo "<a href='index.php'>Go Back</a>";
    }
    ?>
    </div>
    <?php echo "<p><img src='check.png' alt='Success' width='20' height='15'> Student registered successfully!</p>";?>
</body>
</html>