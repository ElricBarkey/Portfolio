<?php
/**
 *  305/guestLogin.php
 *  Author Elric B
 *  Date 3/4/2020
 *  Description creates a login page that the user must use to access guestbook
 */

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//start session
session_start();

$username = "";
$err = false; // flag variable

//test to see if form is submitted
if (!empty($_POST))
{
    //get username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = 'admin';
    $pass = '@dm1n';


    if ($username == $user && $password == $pass)
    {
        //store username in session array
        $_SESSION['un'] = $username;

        $page = isset($_SESSION['page']) ? $_SESSION['page'] : "guestbook.php";

        //echo "logged in";
        header("location: $page");
    }
    else
    {
        //set the error to true
        $err = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <style>
        .err {
            color: darkred;
        }
    </style>
</head>
<body>
<div class="container">

    <h1>Login Page</h1>

    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>

        <?php
        if ($err)
        {
            echo '<span class="err">Incorrect login</span><br>';
        }
        ?>


        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>