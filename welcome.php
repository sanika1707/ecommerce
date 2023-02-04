<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: in.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         body{ font: 14px sans-serif; text-align: center; padding-top:80px; 
        /* .wrapper{ padding-Left: 600px; padding-Top: 150px; } */
        /* background-image: url('https://images.all-free-download.com/images/graphicthumb/office_stationery_2_highdefinition_picture_166444.jpg'); */
        background-color: 	#AFEEEE;
        }
    
    </style>

</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="out.php" class="btn btn-danger ml-3">Sign Out of Your Account</a><br> <br> <br>
        <a href="index.php" class="btn btn-primary ml-6 btn-lg">Start Shopping!!</a>
    </p>
</body>
</html>
