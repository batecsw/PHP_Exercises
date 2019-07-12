<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Director Detail</title>
</head>
<body>
    <?php
    // check for GET data submission
    if (!empty($_GET)) {
        $clickedDirector_id = $_GET['director_id'];
    }
    // connect to the movies database
    require_once 'database.php';
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    $db_name = DB_NAME;
    $db_found = mysqli_select_db($conn, $db_name);
    // perform database search for the info on the clicked director
    $query = "SELECT picture, first_name, last_name, date_of_birth
    FROM directors WHERE director_id=$clickedDirector_id";
    $results = mysqli_query($conn, $query);
    $db_record = mysqli_fetch_assoc($results);
    // display the information retrieved
    echo "<img src=" . $db_record['picture'] . " />";
    echo "<p>" . $db_record['first_name'] . " " . $db_record['last_name'] . "<p>";
    echo "<p>Filmography:<p>";
    // perform database search for the movies made by the clicked director
    $query = "SELECT m.movie_id, m.title, m.release_year
    FROM movies m INNER JOIN directors d ON d.director_id = m.directorID
    WHERE director_id=$clickedDirector_id";
    $results = mysqli_query($conn, $query);
    // display the information retrieved
    echo "<ul>";
    while ($db_record = mysqli_fetch_assoc($results)) {
        echo "<li><a href='movie.php?movie_id=" . $db_record['movie_id']. "'>" . $db_record['title'] . " (" . $db_record['release_year'] . ")</a></li>";
    }        
    echo "</ul>";
    // Close the connection to the database
    mysqli_close($conn);

    ?>
    <br><br>
    <a href="directors.php">Go to directors page</a><br>
    <a href="movies.php">Go to movies page</a>
</body>

</html>