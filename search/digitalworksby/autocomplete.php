<?php
include "../../login/session.php";
include "../req.php";

// Establish a database connection
$connection = new mysqli($host, $user, $password, $db);

// Check the connection
if ($connection->connect_errno) {
    echo json_encode([]);
    exit();
}

// Get the user input from the GET request
$searchTerm = $_GET['term'];

// SQL query to retrieve suggestions
$sql = "SELECT DISTINCT(author) FROM (
        SELECT author FROM Audio
        UNION
        SELECT author FROM Text
        UNION
        SELECT creator AS author FROM Video
        UNION
        SELECT creator AS author FROM Games
    ) AS Authors
    WHERE author LIKE '%" . $searchTerm . "%'
    LIMIT 10";

$result = $connection->query($sql);

// Prepare the suggestions array
$suggestions = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $suggestions[] = $row['author'];
    }
}

// Return the suggestions as a JSON array
echo json_encode($suggestions);

// Close the database connection
$connection->close();
?>
