<?php

include './bin/inc/lib/util/util.inc.php';

$ut = new Util();

$user_login = $password = $password_rep = $full_name = $email = $isAdmin  = "";
$user_login_err = $password_err = $password_rep_err = $full_name_err = $email_err = $isAdmin_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // checking for the username information
    if(isset($_POST["username"])){
        $user_login = test_input($_POST["username"]);

    }else{
        $user_login_err = "No Username set";
    }

    // checking for full name
    if(isset($_POST["fullname"])){
        $full_name = test_input($_POST["fullname"]);

    }else{
        $full_name_err = "No name set";
    }

    // checking for email
    if(isset($_POST["email"])){
        
        if($ut->eMailConfirm($_POST["email"]) == true){
            $email = test_input($_POST["email"]);

        }else{
            $email_err = "Email not valid";
            
        }

    }else{
        $email_err = "No email set";
    }

    // checking for main password sign up
    if(isset($_POST["password-sign-up"])){
        $password = test_input($_POST["password-sign-up"]);
        
    }else{
        $password_err = "No password set";
    }

    // checking if the password repeated was set
    if(isset($_POST['password-repeat-sign-up'])){
        $password_rep = test_input($_POST['password-repeat-sign-up']);

    }else{
        $password_rep_err = "no password repeated was set";
        
    }
    
    // checking if the password and the repeat match
    if($password == $password_rep){
        $password = $password;
        
    }else{
        $password_rep_err = "Passwords do not match";

    }

    // checking if is Admin is checked
    if(isset($_POST["isAdmin"])){
        $isAdmin = test_input($_POST["isAdmin"]);

    }else{
        $isAdmin_err = "No Username set";
    }

    if(empty($user_login_err) && empty($full_name_err) && empty($email_err) && empty($password_err) && empty($password_rep_err) && empty($isAdmin_err)){
        sign_up($user_login, $password, $full_name, $email, $isAdmin);

    }else{
        echo '<script>alert("One or more inputs is not filled");</script>';
    }

}


function sign_up($user_login, $password, $full_name, $email, $isAdmin){
    include "./bin/inc/db/run-query.inc.php";

    $sqlQuery = new mysqlQuery();
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
                    <input type="text" name="username" id="username-sign-up" placeholder="Sign Up.........">
                    <br>
                    <input type="text" name="fullname" id="fullname-sign-up" placeholder="FullName.........">
                    <br>
                    <input type="text" name="email" id="email-sign-up" placeholder="Email.........">
                    <br>
                    <input type="password" name="password-sign-up" id="psw-main" placeholder="password.........">
                    <br>
                    <input type="password" name="password-repeat-sign-up" id="psw-main" placeholder="repeat password.........">
                    <br>
                    <div class="border">
                        <input type="checkbox" name="isAdmin">
                        <label for="isAdmin">Is Admin</label>
                    </div>
                    <br>
                    <input class="btn btn-outline-success btn-block" type="submit" name="submit" value="Submit">  
                    <a href="./index.php" class="btn btn-outline-primary btn-block">Login</a>
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