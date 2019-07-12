<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        td {
            font-size: 0.75em;
            text-align: center;
            border: 1px solid black;
            padding: 0.3em 0.9em;
        }
    </style>

</head>
<body>
    <h1>Welcome to the Movie Database!<h1>
    <br>
    <h2>Here is our Movies List:<h2>
    <br>
<?php
require_once 'database.php';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
$db_name = 'movieDB';
$db_found = mysqli_select_db($conn, $db_name);
$query = 'SELECT poster, title, release_year FROM movies ORDER BY release_year DESC';
$results = mysqli_query($conn, $query);
while($db_record = mysqli_fetch_assoc($results)) {
    echo "<img src" . $db_record['poster'] . " />";
    echo "<p>" . $db_record['title'] . " (" . $db_record['release_year'] . ")<p>";
}
    echo "<table>";


// Close the connection to the database
mysqli_close($conn);

?>
</body>
</html>
