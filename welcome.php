<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
</head>
<body>

    <?php
        // Check if the 'name' parameter exists in the URL
        if (isset($_GET['name'])) {
            // Get the value of the 'name' parameter
            $name = htmlspecialchars($_GET['name']);

            // Use PHP to print a dynamic greeting
            echo "<h1>Hello, " . $name . "!</h1>";
            echo "<p>Welcome to this dynamic web page.</p>";
        } else {
            // If no name is provided, show a default message
            echo "<h1>Hello, Guest!</h1>";
            echo "<p>Please go back and enter your name.</p>";
        }
    ?>

</body>
</html>
