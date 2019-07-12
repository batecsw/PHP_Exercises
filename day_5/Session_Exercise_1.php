<?php
session_start();
if (isset($_SESSION['page_view'])) {
    echo "You have visited the page create-session";
} else {
    echo "You have not visited the create-session page";
}
/*
    Create two pages :

    `create-session.php`
        The page will initialize a session variable 'viewed' to `true`;

    `get-viewed.php`
        The page will display a message 'You have visited the page
        create-session ', if the 'viewed' variable is assigned.

        Otherwise, it will display the message 'You have not visited
        the create-session page '
 */