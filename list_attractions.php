<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attractions List</title>
</head>
<body>
    <h1>List of Attractions</h1>

    <?php
    include 'db.php';

    $sql = "SELECT id, name, description, opening_time, closing_time FROM attractions";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border
