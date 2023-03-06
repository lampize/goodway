<?php include'assets/includes/connection.php'; ?>
<head>
    <title>Cart</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/cart.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    
</head>

<header class="header">

<a href="shop.php" class="logo">
<i class="bx bx-book"></i><span>GoodWay</span>
</a>
</header>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <form action="cart.php" method="post" enctype="multipart-form-data"></form>
                <h1>My Cart</h1>
                <hr>

                <?php
                $select_cart = "select * from cart";
                $run_cart = mysqli_query($connect,$select_cart);
                $count_cart = mysqli_num_rows($run_cart);
                ?>

                <p class="text-muted">You currently have <?php echo $count_cart; ?> item(s) in your cart.</p>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Book</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th colspan="1">Delete</th>
                                <th colspan="2">Total Price</th>
                            </tr>
                        </thead>
                    <tbody>

                    <?php
                    $total=0;
                    while($row_cart = mysqli_fetch_array($run_cart)){
                        $book_id = $row_cart['book_id'];
                        $book_qty = $row_cart['book_qty'];
                        $only_price = $row_cart['b_price'];

                        $get_book = "select * from products where book_id='$book_id'";
                        $run_book = mysqli_query($connect,$get_book);
                        while($row_book = mysqli_fetch_array($run_book)){
                            $book_title = $row_book['book_name'];
                            $book_img = $row_book['book_img'];
                            $total_price = $only_price*$book_qty;
                            $_SESSION['book_qty'] = $book_qty;
                            $total += $total_price;

                    ?>

                    <tr>
                        <td>
                            <img src="admin/assets/images/books/<?php echo $book_img; ?>" width="40px" height="40px">
                        </td>
                        <td>
                            <a href="#" ><?php echo $book_title; ?></a>
                        </td>
                        <td><input type="text" name="quantity" value="<?php echo $_SESSION['book_qty']; ?>" data-product_id="<?php echo $pro_id; ?>" class="quantity form-control">
                        </td>
                        <td>
                        Rs.<?php echo $only_price; ?>.00
                        </td>
                        <td>
                        <input type="checkbox" name="remove[]" value="<?php echo $book_id; ?>">
                        </td>
                        <td>
                        Rs. <?php echo $total_price; ?>.00
                        </td>
                    </tr>

                            <?php } } ?>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th colspan="5">Total </th>
                                <th colspan="2"> Rs. <?php echo $total; ?>.00</th>
                            </tr>
                        </tfoot>
                        </table>
                        </div>

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="shop.php" class="btn btn-secondary">
                                <i class='bx bx-chevron-left'></i> Contiue Shopping
                                </a>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-info" type="submit" name="update" value="Update Cart">
                                <i class="bx bx-refresh"></i> Update Cart
                                </button>
                                <a href="checkout.php" class="btn btn-success">
                                    Proceed to Checkout<i class="bx bx-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                        </form>
                        </div>
                        </div>
       

                        <?php 
                        function update_cart(){
                            global $connect;
                            if(isset($_POST['update'])){
                                foreach($_POST['remove'] as $remove_id){
                                    $delete_product = "delete from cart where book_id='$remove_id'";
                                if($run_delete){
                                    echo "<script>window.open('cart.php','_self')</script>";
                                }
                                }
                            }
                        }
                        echo @$up_cart = update_cart();
                        ?>

                        <div class="col-md-3">
                            <div class="box" id="order-summary">
                                <div class="box-header">
                                    <h3>Order Summary</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Total 
                                                        <th> Rs. <?php echo $total; ?>.00</th>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

        </div>
    </div>
                       
          

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
