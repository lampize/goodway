<?php include 'head.php'; ?>

<?php include 'assets/includes/connection.php'; ?>

<title>product_details</title>

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<link rel="stylesheet" href="assets/css/product.css">


<section class="home">

    <div class="content">
        <h5>Product Details</h5>
    </div>

</section>

<?php

$id = $_GET['id'];
$get_book = "select * from products where book_id=$id";
$run_book = mysqli_query($connect, $get_book);
while ($row_book = mysqli_fetch_array($run_book)) {
    $book_id = $row_book['book_id'];
    $book_name = $row_book['book_name'];
    $author_name = $row_book['author_name'];
    $book_image = $row_book['book_img'];
    $book_price = $row_book['book_price'];
    $bsale_price = $row_book['bsale_price'];
    $book_desc = $row_book['book_desc'];
    $book_qty = $row_book['book_qty'];
?>


    <section id="product" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="assets/images/books/<?php echo $book_image; ?>" alt="product" class="img-fluid">
                    <div class="form-row pt-3 font-size-12 font-baloo">
                        <div class="col">
                            <button type="submit" class="btn btn-success form-control">Proceed to Checkout</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 py-5">
                    <h3 class="font-baloo font-size-20"><?php echo $book_name; ?></h3>
                    <small>by <?php echo $author_name; ?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bx-star"></i></span>
                        </div>
                    </div>
                    <hr class="m-0">

                    <table class="my-3">
                        <tr class="font-rale font-size-14">
                            <td class="font-size-30">M.R.P :</td>
                            <td><s class="mrp"> Rs. <?php echo $book_price; ?></s></td>
                        </tr>
                        <tr class="font-rale font-size-14">
                            <td>Deal Price :</td>
                            <td class="font-size-20 text-danger"> Rs. <span><?php echo $bsale_price; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                        </tr>

                    </table>



                    <div class="row">
                        <div class="col-6">
                            <div class="qty py-2 d-flex">
                                <h6 class="font-baloo">Qty</h6>
                                <div class="px-4 d-flex font-rale">
                                    <select name="book_qty" class="form-control">

                                        <option>Select quantity</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 py-5">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14"><?php echo $book_desc; ?>
                        </p>
                    </div>

                </div>

            </div>
    </section>
<?php } ?>

<script src="script.js"></script>

<?php include 'footer.php'; ?>