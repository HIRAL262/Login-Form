<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body class="main-container">
    <div class="container">
        <div class="section">

            <form action="login.php" method="post" class="login100-form validate-form">
                <h1 class="main-title">Login</h1>
                    <?php
                    if (isset($_GET['error'])){?>
                    <p class="error"> <?php echo $_GET['error']; ?></p>
                    <?php }
                ?>
                <div class="wrap-input100 validate-input">
                    <label>User Name</label> <input class="input100" type="text" name="uname" placeholder="Enter Name"/>
                </div>
                <div class="wrap-input100 validate-input">
                    <label>Password</label> <input class="input100" type="password" name="password" placeholder="Enter Password"/>
                </div>
                <div class="container-login-form-btn">
                    <button class="login-form-btn" type="submit"> Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
