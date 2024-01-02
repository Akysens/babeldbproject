<?php
include "../../login/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Result</title>
    <link rel="stylesheet" href="../input.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rye">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Noto+Serif+Display:wght@500&family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/babellogo.ico">
</head>
<body>
    <div class="main-wrapper">
        <div class="navbar-wrapper">
            <ul class="navbar">
                <svg class="logo-navbar" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 285.75 285.75">
                    <path d="M143.607 10.915a140.15 134.324 0 0 0-16.784.967 210.824 210.824 0 0 0-4.4 3.568c-12.57 10.478-27.5 25.112-42.508 39.303-15.88 15.015-29.452 27.257-42.99 37.93-10.072 7.943-19.89 14.814-29.393 20.391a140.15 134.324 0 0 0-.418 1.677c9.664-5.357 19.665-12.012 29.967-19.724C53.331 82.864 68.02 70.174 87.03 53.613c17.698-15.418 33.728-29.33 47.428-37.737 3.304-2.027 6.377-3.659 9.277-4.961a140.15 134.324 0 0 0-.127 0zm33.624 3.922c3.82 3.346 7.181 7.344 10.092 11.114 4.328 5.605 10.073 14.023 13.263 18.63 3.411 4.926 8.795 12.682 14.184 19.98 7.116 9.64 17.278 22.464 30.719 34.968 14.093 13.11 27.18 21.59 36.723 27.015-9.526-6-22.65-15.348-36.808-29.625-13.537-13.65-23.85-27.605-31.18-38.256-5.717-8.309-10.98-16.793-14.778-22.835-3.31-5.267-7.667-12.14-11.996-18.17a140.15 134.324 0 0 0-10.219-2.82zm-68.303.253a140.15 134.324 0 0 0-10.345 2.944c-6.951 6.501-14.17 13.485-21.468 20.458-15.495 14.807-28.498 26.81-41.73 37.504-6.757 5.46-13.403 10.44-19.923 14.85a140.15 134.324 0 0 0-1.06 2.353c6.927-4.422 14.005-9.461 21.227-15.04 15.903-12.287 30.02-24.89 48.63-41.542 8.637-7.727 16.884-15.072 24.669-21.527zm55.332.267c-1.956-.11-4.025.04-6.228.485-8.924 1.807-19.254 8.256-32.501 19.086-12.747 10.42-28.322 25.07-43.627 38.86-16.263 14.652-30.287 26.605-44.075 36.867-11.633 8.658-22.912 15.982-33.717 21.61a140.15 134.324 0 0 0-.135 1.432c10.852-5.328 22.187-12.31 33.924-20.538 16.559-11.607 31.612-23.772 51.05-39.62 18.12-14.773 34.512-28.098 48.483-36.208 14.105-8.189 24.216-10.16 32.915-7.364 8.373 2.691 14.916 9.833 20.04 16.185 4.257 5.276 9.676 12.952 12.773 17.295 2.968 4.161 8.702 12.227 13.567 18.765 6.795 9.132 16.594 21.49 29.609 33.67 13.694 12.817 26.472 21.26 35.874 26.737-9.356-6.035-22.251-15.403-36.056-29.557-13.21-13.544-23.17-27.288-30.242-37.783-5.55-8.237-10.539-16.505-14.221-22.528-3.67-6.003-8.624-14.104-13.369-20.458-2.606-3.49-5.62-7.102-8.913-10.024-4.431-3.929-9.283-6.584-15.15-6.912zm26.956 3.543c2.837 3.922 5.573 7.801 7.445 10.433 3.725 5.238 9.176 12.865 14.918 20.366 7.45 9.734 17.955 22.488 31.652 34.743 12.481 11.167 24.068 18.748 33.13 23.895a140.15 134.324 0 0 0-.089-.291c-9.05-5.71-20.565-14.005-33.02-26.002-13.687-13.184-24.311-26.808-31.897-37.188-5.853-8.008-11.497-16.47-15.417-22.257-.324-.48-.775-1.12-1.119-1.626a140.15 134.324 0 0 0-5.603-2.073zm10.3 4.02c3.489 4.49 7.402 9.466 11.759 14.723 7.783 9.391 18.58 21.516 32.344 32.949 9.01 7.483 17.462 13.146 24.8 17.456a140.15 134.324 0 0 0-.558-1.115c-7.175-4.705-15.356-10.74-24.11-18.541-13.636-12.152-24.527-24.898-32.35-34.566-2.243-2.773-4.487-5.677-6.692-8.525a140.15 134.324 0 0 0-5.194-2.382zM74.37 28.45a140.15 134.324 0 0 0-12.862 7.922c-8.146 7.414-15.68 14.025-23.228 20.252a140.15 134.324 0 0 0-6.106 7.148c.469-.356.931-.69 1.402-1.051C47.205 52.257 59.325 41.686 74.37 28.45zm141.214 1.534c7.931 8.321 18.311 18.447 31.086 27.881a185.076 185.076 0 0 0 8.204 5.7 140.15 134.324 0 0 0-3.766-4.505 214.556 214.556 0 0 1-4.198-3.226c-8.739-6.924-16.391-14.095-22.966-20.657a140.15 134.324 0 0 0-8.36-5.193zm-48.137 8.757c-1.984-.024-4.09.197-6.338.701-9.102 2.04-19.727 8.44-33.35 18.875-12.994 9.952-29.232 24.053-44.775 36.934-16.607 13.763-30.956 24.954-44.915 34.452-11.961 8.138-23.518 14.98-34.532 20.163a140.15 134.324 0 0 0 .057 1.325c10.978-4.848 22.49-11.264 34.452-18.853 16.815-10.668 32.006-21.764 51.873-36.34 18.493-13.566 35.25-25.768 49.61-33.239 14.481-7.533 24.89-9.383 33.79-6.912 8.577 2.38 15.175 8.784 20.289 14.45 4.306 4.77 9.522 11.439 12.583 15.348 3.783 4.832 7.467 9.667 13.102 16.823 6.503 8.257 15.961 19.675 28.41 30.993 13.165 11.97 25.406 19.967 34.506 25.23-9.023-5.804-21.457-14.784-34.764-28.249-12.734-12.885-22.343-25.91-29.174-35.853-5.386-7.84-10.17-15.637-13.773-21.409-3.595-5.757-8.35-13.347-13.031-19.3-2.558-3.255-5.524-6.575-8.8-9.219-4.404-3.554-9.27-5.846-15.222-5.92zm2.63 27.535c-2.056.05-4.242.329-6.578.862-9.447 2.155-20.49 8.246-34.54 17.895-13.31 9.14-30.153 22.132-45.874 33.691-16.881 12.412-31.43 22.448-45.46 30.884-11.236 6.755-22.064 12.445-32.403 16.877a140.15 134.324 0 0 0 .228 1.335c10.227-4.085 20.926-9.324 32.065-15.484 17.018-9.413 32.061-18.977 52.343-31.809 18.788-11.886 35.885-22.526 50.72-29.055 14.936-6.573 25.804-8.178 35.094-6.055 8.972 2.05 15.813 7.561 21.058 12.38 4.457 4.095 9.637 9.625 12.706 12.934 4.315 4.654 6.888 7.566 12.845 14.306 6.249 7.071 15.44 17.148 27.21 27.121a199.453 199.453 0 0 0 31.056 21.64 140.15 134.324 0 0 0 .024-.1c-8.4-5.336-19.45-13.19-31.407-24.736-12.148-11.73-21.408-23.583-28.033-32.623-5.254-7.17-9.892-14.244-13.474-19.576-3.583-5.333-8.221-12.16-12.972-17.536-2.577-2.917-5.572-5.848-8.922-8.141v.003c-4.502-3.08-9.518-4.966-15.687-4.814zm4.979 30.875c-3.06-.121-6.397.174-10.088.972-9.939 2.147-21.497 7.688-35.993 16.214-14.206 8.356-30.536 19.145-46.827 29.355-17.055 10.689-31.658 19.266-45.642 26.408-9.508 4.856-18.703 9.053-27.526 12.482a140.15 134.324 0 0 0 .434 1.414c8.62-3.08 17.588-6.822 26.89-11.11 17.194-7.924 31.706-15.616 52.397-26.352 18.97-9.843 36.332-18.58 51.692-23.93 15.432-5.373 26.892-6.627 36.744-4.85 9.534 1.718 16.804 6.233 22.32 10.1 8.359 5.857 18.074 14.182 25.986 21.59 6.026 5.641 15.109 14.105 26.108 22.332a207.268 207.268 0 0 0 24.968 16.05 140.15 134.324 0 0 0 .126-.363 192.018 192.018 0 0 1-25.449-19.018c-11.498-10.163-20.465-20.47-26.94-28.325-5.183-6.288-9.703-12.408-13.343-17.156-3.636-4.742-8.258-10.625-13.208-15.273-2.663-2.501-5.77-4.97-9.285-6.861-3.934-2.117-8.266-3.476-13.365-3.678zm.975 33.151c-3.271-.009-6.83.326-10.75 1.077-10.55 2.02-22.685 6.806-37.61 13.951-29.256 14.007-66.793 34.746-92.955 45.549-6.792 2.804-13.397 5.31-19.816 7.516a140.15 134.324 0 0 0 .726 1.596 412.194 412.194 0 0 0 18.799-6.313c17.474-6.324 30.768-11.877 51.97-20.323 19.009-7.572 36.533-14.205 52.419-18.216 32.978-8.326 49.132-2.194 62.65 4.354 9.159 4.437 19.033 9.99 27.028 15.594 5.717 4.006 15.187 10.82 25.242 16.966a234.519 234.519 0 0 0 17.106 9.505 140.15 134.324 0 0 0 .384-.811 190.27 190.27 0 0 1-17.857-12.114c-10.84-8.298-19.587-16.79-25.986-23.258-8.614-8.706-18.124-20.448-27.15-26.97-2.817-2.034-6.12-3.997-9.886-5.463-4.21-1.639-8.862-2.621-14.314-2.64zm2.669 34.287c-13.34-.318-29.667 3.554-53.782 12.393-29.986 10.992-67.074 26.66-92.634 34.638a440.11 440.11 0 0 1-8.897 2.664 140.15 134.324 0 0 0 1.22 1.913c2.43-.6 4.812-1.159 7.3-1.807 27.796-7.241 73.62-21.671 103.778-26.51 34.021-5.456 51.99-.697 66.707 3.628 9.977 2.932 20.661 6.057 28.718 9.703 6.17 2.793 14.985 7.121 24.731 11.44 2.493 1.104 4.832 2.099 7.086 3.04a140.15 134.324 0 0 0 1.013-1.6 203.905 203.905 0 0 1-8.437-4.89c-10.237-6.28-18.878-12.803-25.301-17.782-8.823-6.84-18.37-16.06-28.283-21.117a51.476 51.476 0 0 0-10.695-4.028v.003c-3.962-1.008-8.077-1.582-12.524-1.689zm-1.655 33.98c-14.475.084-31.883 3.16-56.447 9.52-28.121 7.282-60.921 16.89-85.22 22.486a140.15 134.324 0 0 0 2.268 2.58c27.529-4.649 64-11.38 93.2-13.681 34.908-2.751 54.76.7 71.002 3.048 13.949 2.017 19.725 1.858 31.082 4.413 5.81 1.307 11.417 2.757 18.152 4.51a140.15 134.324 0 0 0 2.791-3.298c-8.315-3.796-15.735-7.66-21.505-10.738-9.22-4.919-18.951-11.69-29.971-15.26-3.308-1.072-7.213-2.028-11.697-2.677-4.329-.626-8.83-.932-13.655-.904zm4.095 32.12c-17.327-.319-37.664 1.936-66.538 6.638-25.686 4.182-43.408 7.441-61.691 10.315a140.15 134.324 0 0 0 5.155 3.999c21.197-1.517 44.207-2.942 66.087-3.26 36.03-.523 56.662 1.74 75.246 2.546 13.803.6 20.566-.138 30.52.14a140.15 134.324 0 0 0 8.737-7.115c-1.71-.53-3.632-1.108-5.173-1.596-9.92-3.137-19.819-7.683-32.226-9.885-3.635-.644-7.933-1.175-12.858-1.49a160.305 160.305 0 0 0-7.259-.292zm-5.092 28.333c-18.788.168-40.63 1.716-69.211 4.168-9.84.844-17.446 1.49-25.855 2.216a140.15 134.324 0 0 0 18.085 7.191c5.43.1 10.8.186 16.396.326 25.047.626 47.881 1.567 64.99 1.912a140.15 134.324 0 0 0 33.256-13.284c-4.391-.76-9.256-1.443-15.649-1.934-4.004-.307-8.74-.51-14.137-.582-2.57-.033-5.19-.041-7.875-.01z" style="fill:#f0d9b1;fill-rule:nonzero;stroke:none;stroke-width:2.162;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;fill-opacity:1;stroke-miterlimit:4;stroke-dasharray:none"/>
                </svg>
                <li id="title-navbar">BABEL My E-Library</li>
                <li class="navbarelem"><a class="navbarelemlink" href="../../login/logout.php">Logout</a></li>
                <li class="navbarelem"><a class="navbarelemlink" href="../../map/map.php">Map</a></li>
                <li class="navbarelem"><a class="navbarelemlink" href="../inputCentral.php">Input</a></li>
                <li class="navbarelem"><a class="navbarelemlink" href="../../search/searchCentral.php">Search</a></li>
            </ul>
        </div>
    </div>
    <div class="card-wrapper">
        <h2>Input Results</h2>
        <?php
            include "../req.php";
            $connection = new mysqli($host, $user, $password, $db);

            if ($connection->connect_errno) {
                echo "Failed to connect to database. " . $mysqli->connect_error;
                exit();
            }

            $r_title = $_REQUEST['title'];
            $r_genre = $_REQUEST['genre'];
            $r_date = $_REQUEST['date'];
            $r_publisher = $_REQUEST['publisher'];
            $r_filesize = $_REQUEST['filesize'];

            $sql1 = "INSERT INTO Media(title, genre, datePublished) VALUES ('$r_title', '$r_genre', '$r_date');";
            $sql2 = "INSERT INTO DigitalMedia(mid, downloadInfo) VALUES (LAST_INSERT_ID(), 1);";
            $sql3 = "INSERT INTO Games(mid, publisher, fileSize) VALUES (LAST_INSERT_ID(), '$r_publisher', $filesize);";

            if ($connection->query($sql1) and $connection->query($sql2) and $connection->query($sql3)) {
                echo "<p>Data added to database <b>successfully</b>.</p>";
            }
            else {
                echo "<p>Input <b>failed</b>: " . $connection->error . "</p>";
            }

            echo "<a href=\"../inputCentral.html\">Go back to maintenance page.</a>";

            $connection->close();
        ?>
    </div>
</body>
</html>