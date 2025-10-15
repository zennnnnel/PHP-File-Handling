<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<body>
    <div class="container2">

        <?php
        file_put_contents("students.txt", "");
        echo "<p>🗑️ All student records have been cleared.</p>";
        echo "<a href='index.php'>Go Back</a>";
        ?>
    </div>
</body>
</html>