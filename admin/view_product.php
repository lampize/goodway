<?php include '../assets/includes/connection.php'; ?>

<?php include 'header.php'; ?>

        <title>View Products</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="assets/css/product.css">

    <body>

    <button>
            <a type="button" name="submit" class="btn btn-primary form-back" href="add_product.php">Add Products</a>
    </button>
    <div class="content">
        <div class="heading">
            <h5 class="title">View Products</h5>
        </div>
        <div class="panel-body"></div>
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped-sm">

<thead>

<tr>

    <th>#</th>
    <th>Title</th>
    <th>Image</th>
    <th>Price</th>
    <th>Sold</th>
    <th>Qty</th>
    <th>Delete</th>
    <th>Edit</th>

</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_book = "select * from products";

$run_book = mysqli_query($connect, $get_book);

while($row_book=mysqli_fetch_array($run_book)){

$book_id = $row_book['book_id'];

$book_name = $row_book['book_name'];

$book_image = $row_book['book_img'];

$book_price = $row_book['book_price'];

$book_qty = $row_book['book_qty'];

$i++;

?>

<td> <?php echo $i; ?></td>

<td><?php echo $book_name; ?></td>

<td><img src="assets/images/books/<?php echo $book_image; ?>" width="60" height="60"></td>

<td>Rs. <?php echo $book_price; ?></td>

<td>

<?php

$get_sold = "select * from orders where book_id='$book_id'";
$run_sold = mysqli_query($connect,$get_sold);
$count = mysqli_num_rows($run_sold);
echo $count;
?>

</td>

<td> <?php echo $book_qty; ?></td>

<td>

<a href="delete_product.php=<?php echo $book_id; ?>">

<i class="bx bx-trash"> </i> Delete

</a>

</td>

<td>

<a href="editproduct.php?id=<?php echo $book_id; ?>">

<i class="bx bx-edit"> </i> Edit

</a>

</td>


</tr>

<?php } ?>