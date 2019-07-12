<?php

session_start();
if (!isset($_SESSION["first_time"])) {
    $_SESSION["first_time"] = time();
    $_SESSION["count"] = 1;
} else 
    $_SESSION["count"] += 1;


echo "First visit : " . date('Y-m-d H:i:s' , $_SESSION["first_time"]) . "<br>";
echo "Number of visits : " . $_SESSION["count"];

/*
    Step 1: Create a page that indicates how often it has been visited by the user.
    No need for forms, just the $ _SESSION array


    Step 2: Also post the date of first visit by the client.

    Step 3: Add a 'Reset' submit (in a form, of course)
    When you click on the button, the counter is reset.
 */