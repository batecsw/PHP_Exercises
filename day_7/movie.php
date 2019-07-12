<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Detail</title>
</head>
<body>
<?php
// check for GET data submission
if (!empty($_GET)) {
    $clickedMovie_id = $_GET['movie_id'];
}
// connect to the movies database
require_once 'database.php';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
$db_name = DB_NAME;
$db_found = mysqli_select_db($conn, $db_name);
// perform database search for the info on the clicked movie
$query = "SELECT m.poster, m.title, m.release_year, d.director_id, d.first_name, d.last_name
    FROM movies m INNER JOIN directors d ON d.director_id = m.directorID
    WHERE movie_id=$clickedMovie_id";
$results = mysqli_query($conn, $query);
$db_record = mysqli_fetch_assoc($results);
// display the information retrieved
echo "<img src=" . $db_record['poster'] . " />";
echo "<p>" . $db_record['title'] . " (" . $db_record['release_year'] . ")<p>";
echo "<p>Director: <a href='director.php?director_id=" . $db_record['director_id'] . "'>" . $db_record['first_name'] . " " . $db_record['last_name'] . "</p>";


// Close the connection to the database
mysqli_close($conn);


?>
<br><br>
<a href="movies.php">Go to movies page</a><br>
<a href="directors.php">Go to directors page</a>   
</body>
</html>