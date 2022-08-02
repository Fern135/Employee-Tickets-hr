<?php 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title id="index-title">Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include './bin/inc/css-inc/styles.inc.php'; ?>
    </head>
    <body onload="">

    <div class="container">

        <div class="card center">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="text" name="username-fullname-email" id="username-fullname-email-main" placeholder="Login.........">
                    <br>
                    <input type="password" name="password-main-login-index" id="psw-main" placeholder="password.........">
                    <br>
                    <input class="btn btn-outline-success btn-block" type="submit" name="submit" value="Submit">  
                    <a href="./index.php" class="btn btn-outline-primary btn-block">Login</a>
                    <a href="./videos.php" class="btn btn-outline-primary btn-block">videos/movies</a>
                </form>
            </div>
            <div class="card-footer">
                <?php include './bin/inc/footer.inc.php'; ?>
            </div>
        </div>
    </div>

    <?php include './bin/inc/js-inc/js.inc.php'; ?>

    </body>
</html>