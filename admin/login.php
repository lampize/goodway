<?php

include '../assets/includes/connection.php';
session_start();

if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);

    $select_users = mysqli_query($connect, "SELECT * FROM `admin` where email = '$email' AND password = '$password'") or die('query failed');

    $count = mysqli_num_rows($select_users);

    if($count==1){
        $_SESSION['email']=$email;
        
        echo"<script>window.open('admin.php','_self')</script>";
    }else{
        $message[] = 'incorrect email or password!';
    }
}
?>
<html>
    <head>
        <title>adminlogin</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/login.css">
    </head>
    <body>
        <div class="hero">
            <h1>Admin Pannel</h1>
            <div class="form-box">
        <form method="POST" action="" id="login" class="input-group">
            <input type="email" class="input-field" placeholder="User Email" name="email" autocomplete="off" autofocus required>
            <input type="password" class="input-field" placeholder="Enter password" name="password" autocomplete="off" value="" required>
            <button type="submit" class="submit-btn" name="submit">Login</button>
            
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
            </div>
        </div>



    </body>
</html>