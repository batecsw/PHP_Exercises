<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        form, input {
            font-size: 1em;
            padding: 0.3em 0.9em;
        }
    </style>
</head>
<body>
    <h2>Sign Up to the Movie Database</h2>
    <form action="" method="post">
        Your First Name:
        <input type="text" name="firstName" placeholder="your first name" required /><br>
        Your Last Name:
        <input type="text" name="lastName" placeholder="your last name" required /><br>
        Your email address:
        <input type="email" name="email" placeholder="your@email" required /><br>
        Your password (min 8 characters):
        <input type="password" name="pass" required /><br>
        Please confirm your password:
        <input type="password" name="confirm" required /><br>
        <input type="submit" name="sub" value="submit" />
    </form>
</body>
</html>
<?php
if(isset($_POST['sub'])) {
    if ($_POST['firstName'] && $_POST['lastName'] &&$_POST['email'] &&$_POST['pass'] && $_POST['confirm']) {
        $yourFirst = htmlspecialchars($_POST['firstName']);
        $yourLast =  htmlspecialchars($_POST['lastName']);
        $yourEmail = htmlspecialchars($_POST['email']);
        $yourPass =  htmlspecialchars($_POST['pass']);
        $confirmPass = htmlspecialchars($_POST['confirm']);
        $pos = strpos($yourEmail, "@");
        $length = strlen($yourPass);
        if ($pos) {            
            if ($length > 7) {
                if ($yourPass == $confirmPass) {
                    $pass = password_hash($yourPass, PASSWORD_DEFAULT);
                    // To work with databases we will use a library call: mysqli
                    require_once 'database.php';
                    // Connect to my database server - see database.php file
                    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
                    // Prepare my query - insert
                    $query = "INSERT INTO users(email, first_name, last_name, password) VALUES('$yourEmail' , '$yourFirst', '$yourLast', '$pass')";
                    // Send the query to the DB
                    $results = mysqli_query($conn, $query);
                    if ($results) {
                        echo "Your user details have been successfully added to our database";
                    } else {
                        echo "Sorry there was an error<br>";
                    }
                    
                    // Close the connection to the database
                    mysqli_close($conn);
                } else echo "The Password and Password Confirmation do not match";
            } else echo "Password must be at least 8 characters";
            
        } else echo "Invalid email";
    } else echo "All fields are mandatory";
}

?>