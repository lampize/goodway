<?php

session_start();
include('assets/includes/connection.php');
if(isset($_POST['reg-submit']))
{
    $username = mysqli_real_escape_string($connect,$_POST['username']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $password = mysqli_real_escape_string($connect,md5($_POST['password']));
    $confirm = mysqli_real_escape_string($connect,md5($_POST['confirm']));

    $select_users = mysqli_query($connect, "SELECT * FROM `users` where email = '$email' AND password = '$password'") or die('query failed');
    
    if(mysqli_num_rows($select_users) > 0){
        $message[] = 'user already exists!';
    }else{
        if($password != $confirm){
            $message[] = 'Confirm password not matched!';
        }else{
        mysqli_query($connect, "INSERT INTO `users` (username, email, password) VALUES('$username', '$email', '$password')") or die('query failed');
        $message[] = 'registered successfully!';
        header('location:login.php');
        }
    }
    
}
?>

<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="assets/css/register.css">
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
                    <button type="button" class="toggle-btn" onclick="register()">REGISTER</button>
                </div>

                <div class="social-icon">
                 <a href="https://www.facebook.com/"><img src="assets/images/fb.png"></a>   
                 <a href="https://www.instagram.com/"><img src="assets/images/insta.png"></a>
                </div>

        <form method="POST" id="register" class="input-group">
            <input type="text" class="input-field" placeholder="User Name" name="username" required>
            <input type="email" class="input-field" placeholder="User Email" name="email" required>
            <input type="password" class="input-field" placeholder="Set password" name="password" required>
            <input type="password" class="input-field" placeholder="Confirm password" name="confirm" required>
                                 
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
            <input type="checkbox" class="check-box" required><span>I agree with the terms and conditions.</span>
                <button type="submit" class="submit-btn" name="reg-submit">Register</button>
                <span>Already have an account</span><a href="login.php">Sign in</a>
        </form>
    </div>
</div>

        </body>
        </html>