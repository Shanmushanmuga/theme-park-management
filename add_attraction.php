<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Attraction</title>
</head>
<body>
    <h1>Add a New Attraction</h1>
    <form action="add_attraction.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="description">Description:</label><br>
        <textarea name="description" rows="4" cols="50"></textarea><br>
        <label for="opening_time">Opening Time:</label>
        <input type="time" name="opening_time" required><br>
        <label for="closing_time">Closing Time:</label>
        <input type="time" name="closing_time" required><br>
        <input type="submit" value="Add Attraction">
    </form>

    <?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $opening_time = $_POST["opening_time"];
        $closing_time = $_POST["closing_time"];

        $sql = "INSERT INTO attractions (name, description, opening_time, closing_time)
                VALUES ('$name', '$description', '$opening_time', '$closing_time')";

        if ($conn->query($sql) === TRUE) {
            echo "New attraction added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>
</body>
</html>
