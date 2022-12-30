<?php

session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succesfull</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
    <body class="main-container">
        <div class="container log">
            <h1>Hello, <?php echo $_SESSION['user_name']?></h1>
                <div class="container-login-form-btn">
                <a class="logout" href="logout.php">logout</a>
                </div>
        </div>
    </body>
</html>

<?php
}
else {
    header('Location:index.php');
    exit();
}
?>