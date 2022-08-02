<?php 

$user_login = $password = "";
$user_login_err = $password_err  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // checking for the login information
    if(isset($_POST["username-fullname-email"])){
        $user_login = test_input($_POST["username-fullname-email"]);
    }else{
        $user_login_err = "No Username set";
    }

    if(isset($_POST["password-main-login-index"])){
        $password = test_input($_POST["password-main-login-index"]);
    }else{
        $password_err = "No password set";
    }


}

// test if the data is good
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title id="index-title">Login</title>
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
                    <a href="./videos.php" class="btn btn-outline-primary btn-block">Movies / videos</a>
                </form>
            </div>
            <div class="card-footer">
                <?php include './bin/inc/footer.inc.php'; ?>
            </div>
        </div>

        
        <script>
            function newLocation() {
                window.location.href="./videos.php";
            }
        </script>
    </div>

    <?php include './bin/inc/js-inc/js.inc.php'; ?>

    </body>
</html>