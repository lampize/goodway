<?php include('assets/includes/connection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">

        <a href="home.php" class="logo">
            <i class="ri-book-3-line"></i><span>GoodWay</span>
        </a>
        <ul class="navbar">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <div class="main">
            <a href="guestlogin.php"><i class="ri-user-4-fill"></i>Guest Login</a>
            <a href="login.php" class="user"><i class="ri-user-fill"></i></a>
            <a href="cart.php"><i class="ri-shopping-cart-fill"></i></a>
            <a href="#"><i class='bx bxs-heart'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <section class="home" id="home">
        <div class="content">
            <h3>For All Your Reading Needs</h3>
            <p>Regular reading allows you to better formulate your own thoughts.
                Our team will always help you make up your mind and find a book for fun activities.
            </p>
            <a href="login.php"><button class="button-74" role="button">get whats yours now</button></a>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="assets/images/feature/ff.jpg">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="assets/images/feature/f2.png">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="assets/images/feature/f4.png">
            <h6>Secure Payment</h6>
        </div>
    </section>

    <section id="featured-books">
        <div class="container py-5">
            <h4 class="font-rubik font-size-20">Books</h4>
            <hr>

            <?php


            $get_book = "select * from products";
            $run_book = mysqli_query($connect, $get_book);
            while ($row_book = mysqli_fetch_array($run_book)) {
                $book_id = $row_book['book_id'];
                $book_name = $row_book['book_name'];
                $author_name = $row_book['author_name'];
                $book_image = $row_book['book_img'];
                $book_price = $row_book['book_price'];
                $bsale_price = $row_book['bsale_price'];
            ?>

                <div class="item py-2 mx-5">
                    <div class="product font-rale ">
                        <a href="product_details.php?id=<?php echo $book_id?>"><img src="assets/images/books/<?php echo $book_image; ?>" height="100px" width="100px" alt="product" class="img-fluid"></a>
                        <div class="text-center">
                            <h4><?php echo $book_name;  ?></h4>
                            <h6><?php echo $author_name; ?></h6>

                            <div class="rating text-warning font-size-12">
                                <span><i class="bx bxs-star"></i></span>
                                <span><i class="bx bxs-star"></i></span>
                                <span><i class="bx bxs-star"></i></span>
                                <span><i class="bx bxs-star"></i></span>
                                <span><i class="bx bx-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>Rs. <?php echo $book_price; ?></span>
                            </div>

                            <a href="cart.php">
                            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class='bx bxs-cart'></i></button>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
    </section>

    <?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script src="script.js"></script>

</body>

</html>