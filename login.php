<?php

include 'assets/includes/connection.php';
session_start();

if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $password = mysqli_real_escape_string($connect,md5($_POST['password']));

    $select_users = mysqli_query($connect, "SELECT user_id FROM `users` where email = '$email' AND password = '$password'") or die('query failed');

    if(mysqli_num_rows($select_users) == 1){
        $_SESSION['user']= $select_users;
        header('location:shop.php');
    }else{
        $message[] = 'incorrect email or password!';
    }
}
?>
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" href="assets/css/login.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <body>
        <div class="hero">
        <header class="header">
        <a href="home.php" class="logo">
            <i class="ri-book-3-line"></i><span>GoodWay</span>
        </a>
        </header>
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">LOG IN</button>
                </div>
                 <div class="social-icon">
                 <a href="https://www.facebook.com/"><img src="assets/images/fb.png"></a>   
                 <a href="https://www.instagram.com/"><img src="assets/images/insta.png"></a>
                </div>
        <form method="POST" id="login" class="input-group">
            <input type="text" class="input-field" name="email" placeholder="User Email" required>
            <input type="password" class="input-field" name="password" placeholder="Enter password" required>
            <span>Dont have an account?</span><a href="register.php">Sign up</a>
            <button type="submit" name="submit" class="submit-btn">Log In</button>
            <?php if(isset($message)){ 
                    foreach($message as $message){
                        echo '<div class="message">
                            <span>'.$message.'</span>
                        <i class="bx bx-x" onclick="this.parentElement.remove();"></i>
                    </div>
                    ';
                    }
                }
                ?>
            </form>
        </body>
        </html>