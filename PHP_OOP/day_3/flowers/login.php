<?php
session_start();

if (isset($_POST['sub'])) {
  if (!empty($_POST['mail']) && !empty($_POST['password'])) {
    require_once 'UserManager.php';
    $userManager = new UserManager();
    $userLogged = $userManager->login($_POST['mail'], $_POST['password']);

    if (!empty($userLogged)) {
      $_SESSION['user']['mail']   = $userLogged->getMail();
      $_SESSION['user']['id']     = $userLogged->getId();
      echo 'Welcome USER';
    } else {
      echo 'Wrong credientals';
    }
  }
}
?>

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
  <h2>Flower Shop Login<h2>
  <form action="" method="POST">
    Your E-mail:<br>
    <input type="text" name="mail" placeholder="Email address"><br><br>
    Your Password:<br>
    <input type="text" name="password" placeholder="Password"><br><br>
    <input type="submit" name="sub" value="LOGIN">
  </form>
</body>

</html>