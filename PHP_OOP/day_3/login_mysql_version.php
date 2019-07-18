<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flower Shop Login</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        form,
        input {
            font-size: 1em;
            padding: 0.3em 0.9em;
        }
    </style>
</head>

<body>
    <h2>Log In to the Flower Shop</h2>
    <form action="" method="post">
        Your email address:<br>
        <input type="email" name="email" placeholder="your@email" required /><br><br>
        Your password:<br>
        <input type="password" name="pass" required /><br><br>
        <input type="submit" name="sub" value="submit" />
    </form>
</body>

</html>
<?php
$logged = false;
if (isset($_POST['sub'])) {
    if ($_POST['email'] && $_POST['pass']) {
        $yourEmail = htmlspecialchars($_POST['email']);
        $yourPass =  htmlspecialchars($_POST['pass']);
        $pos = strpos($yourEmail, "@");
        $length = strlen($yourPass);
        if ($pos) {
            echo "user details OK<br>";
            // To work with databases we will use a library call: mysqli
            require_once 'database.php';
            // Connect to my database server - see database.php file
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
            // Prepare my query - insert
            $query = "SELECT email, password FROM users";
            // Send the query to the DB
            $results = mysqli_query($conn, $query);
            while ($db_record = mysqli_fetch_assoc($results)) {
                var_dump($db_record);
                if ($db_record['email'] == $yourEmail) {
                    if ($db_record['password'] == $yourPass) {
                        echo "You have successfully logged on";
                        header("Location: viewFlowers.php");
                        exit;
                    } else {
                        "Your password has not been recognised";
                    }
                }
            }
            echo "Your email has not been recognised";
            // Close the connection to the database
            mysqli_close($conn);
        } else echo "Invalid email";
    } else echo "All fields are mandatory";
}

?>