<?php
$users = ["johnny hallyday" , "simon bertrand" , "tom hanks" , "toto tata" , "john"];
$size = count($users);
$firstName = "";
$lastName = "";
$fullName = "";
$loggedIn = false;
if (isset($_POST['submitButton'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    echo 'Hello ' . $firstName . ' ' . $lastName . "<br><br>";
    $fullName = $firstName . " " . $lastName;
    }
for ($i = 0; $i < $size; $i++) {
    // trim removes white space at the beginning and end of the string
    if ($users[$i] == trim($fullName)) {
        echo "Hello $fullName welcome to the site";
        $loggedIn = true;
        break;
    }
}
if ($loggedIn == false) {
    echo "Sorry $fullName is not an authrorised user of the site";
}

/*
- Exercise 1 :
1. Create an HTML form with two textbox (first and last name) and a 'submit' button.
When the 'submit' button is clicked, display the full name of the person.
Do not worry about what's in the textbox once the button is clicked.

2.Now, display the first and last name in the textbox, even after the button is clicked.

3. Suppose our site has only 5 authorized users.
These users are contained in a table.
For example: $ users = array ("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john");
Check if the user, who enters his data, is one of the 5 users and display a suitable message.

> Step 1: Create a PHP script that browses an array and checks whether a string is there (use a loop and a logical condition).
    
    > Step 2: Use step 1 to check if an user is allow
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="firstName" value ="<?php echo $firstName ?>" placeholder="Your first name" />
        <input type="text" name="lastName" value = "<?php echo $lastName ?>" placeholder="Your last name" />
        <input type="submit" name="submitButton" value="Send" />
        <form>

</body>

</html>