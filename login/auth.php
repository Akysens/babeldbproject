<?php
    session_start();

    include "req.php";

    $connection = new mysqli($host, $user, $password, $db);

    if ($connection->connect_errno) {
        echo "Failed to connect to database. " . $mysqli->connect_error;
        exit();
    }

    if (!isset($_POST["username"], $_POST["password"])) {
        header("Location: login.php?error=empty");
        exit();
    }

    $stmt = $connection->prepare("SELECT uid, password from RegisteredUser where username = ?");

    if($stmt) {
        $stmt->bind_param('s', $_POST["username"]);
        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($uid, $password);
            $stmt->fetch();

            if (password_verify($_POST["password"], $password)) {
                session_regenerate_id();
                $_SESSION["loggedin"] = TRUE;
                $_SESSION["name"] = $_POST["USERNAME"];
                $_SESSION["uid"] = $uid;
                header("Location: ../search/searchCentral.php");
            }

            else {
                header("Location: login.php?error=incorrect");
                exit();
            }
        }

        else {
            header("Location: login.php?error=incorrect");
            exit();
        }

        $stmt->close();
    }
?>