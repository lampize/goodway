<html>
<head>
<title>Guestlogin</title>
        <link rel="stylesheet" href="assets/css/guestlogin.css">

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
                    <button type="button" class="toggle-btn" onclick="login()">Guest Log In</button>
                </div> 
                <form method="POST" id="login" action="shop1.php" class="input-group">
                <p>You can login later</p>
                <input type="text" class="input-field" placeholder="Enter your username" required>
                <button type="submit" class="submit-btn">Log In As Guest</button>
                </form>
            </div>


</body>
</html>