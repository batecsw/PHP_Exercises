<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Flowers</title>
    <style>
    * {
            font-family: Arial, Helvetica, sans-serif;
        }

    div {
        display: flex;
		flex-direction: row;
        justify-content: space-between;
    }
    article {
			width: 600px;
			border: 1px solid black;
			padding: 0.5em;
			margin: 0.5em;
		}
    h1, h5 {
        font-weight: 800;
        color: blue;
    }
    </style>
</head>
<body>
    
</body>
</html>
<?php

// To work with database, we'll use a library call : mysqli
require_once 'database.php';
// Connect to my database server
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
// Choose wich database I want to work with
$db_name = 'flowershop_db';
$db_found = mysqli_select_db($conn, $db_name);

if ($db_found) {
    // Prepare my query
    $query = 'SELECT * FROM flowers';
    //Send the query to the DB
    $results = mysqli_query($conn, $query);
    echo '<h1> Our Catalogue of Flowers </h1>';

    /*
  I retrieve the results as an array
  And display this array (using a loop)
*/

    while ($db_record = mysqli_fetch_assoc($results)) {
        echo '<article><div><h5>' . $db_record['flower_title'] . '</h5>';
        echo '<h5>' . $db_record['flower_price'] . '</h5></div>';
        echo '<p>' . $db_record['flower_description'] . '</p></article>';
    }
} else
    echo "$db_name NOT found !<br>";

// Close the connection to the database
mysqli_close($conn);
