<?php
    include "../login/session.php";
    include "req.php";
    $connection = new mysqli($host, $user, $password, $db);

    if ($connection->connect_errno) {
        echo "Failed to connect to database. " . $mysqli->connect_error;
        exit();
    }

    $r_name = $_POST['text'];

    $sql = "SELECT Media.title FROM Media WHERE title LIKE '%" . $r_name . "%' ORDER BY title;";

    $result = $connection->query($sql);

    $tags = array();
    
    if ($result) {
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tags[] = $row["title"];
            }
        }

        $converted = json_encode($tags);

        echo "<script>$(\".autocomplete\").autocomplete({ source: $converted });</script>";
    }
    
    $connection->close();
?>