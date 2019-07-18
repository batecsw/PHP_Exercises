<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Flowershop Users</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        table, tr, td {
            border: 1px solid black;
            padding: 0.2em;
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
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
// Choose wich database I want to work with
$db_name = 'flowershop_db';
$db_found = mysqli_select_db($conn, $db_name);

if ($db_found) {
    // Prepare my query
    $query = 'SELECT * FROM users';
    //Send the query to the DB
    $results = mysqli_query($conn, $query);
    echo '<h2> Flowershop Users </h2>';

    /*
  I retrieve the results as an array
  And display this array (using a loop)
*/
        echo '<table><tr><td>User ID</td><td>User Name</td><td>Email Address</td><td>Password hash</tr>';
    while ($db_record = mysqli_fetch_assoc($results)) {
        echo '<tr><td>' . $db_record['user_id'] . '</td><td>' . $db_record['name'] . '</td><td>' . $db_record['email'] . '</td><td>' . $db_record['password'] . '</td></tr>';
    }
} else
    echo "$db_name NOT found !<br>";

// Close the connection to the database
mysqli_close($conn);
