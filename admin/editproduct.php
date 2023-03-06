<?php include '../assets/includes/connection.php'; 
$id=$_GET['id'];
// $data = "select * from products where book_id=$id";
// $olddata = mysqli_fetch_assoc($data);
// print_r($olddata);
// die();
?>

<?php include 'header.php'; ?>
<html>
    <head>
        <title>Update Book</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="assets/css/product.css">
    </head>
    <body>

    <button>
            <a type="button" class="btn btn-primary form-back" href="view_product.php">Back</a>
    </button>

    
    <div class="content">
        <div class="heading">
            <h5 class="title">Add book</h5>
    </div>

        <div class="body">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-group" >
            <label class="col-md-3 label">Book Name</label>
            <div class="col-md-6">
            <input type="text" name="book_name" placeholder="Enter Book Name" class="form-control" required >
            </div>
        </div>

        <div class="form-group" >
            <label class="col-md-3 label">Author Name</label>
            <div class="col-md-6">
            <input type="text" name="author_name" placeholder="Enter Author Name" class="form-control" required >
            </div>
        </div>

        <div class="form-group" >
            <label class="col-md-3 label">Book Category</label>
            <div class="col-md-6">
            <select name="book_cat" class="form-control" required >
                <option value="">Select Category </option>

                <?php 
        
        $get_cat = "select * from categories";

        $run_cat = mysqli_query($connect, $get_cat);

        while ( $row_cat = mysqli_fetch_array($run_cat)){

            $cat_id = $row_cat['cat_id'];

            $cat_title = $row_cat['cat_title'];

            echo "<option value='$cat_id'>$cat_title</option>";

        }

        ?>

            </select>
            </div>
        </div>

        

        <div class="form-group" >
            <label class="col-md-3 label">Book Description</label>
            <div class="col-md-6">
            <textarea name="book_desc" class="form-control" pllaceholder="Enter Book desc." required >
            </textarea>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-md-3 label">Book Price</label>
            <div class="col-md-6">
            <input type="number" name="book_price" class="form-control" placeholder="Enter Book Price" required >
            </div>
        </div>

        <div class="form-group" >
            <label class="col-md-3 label">Book Sale Price</label>
            <div class="col-md-6">
            <input type="number" name="bsale_price" class="form-control" placeholder="Enter book discounted price" required >
            </div>
        </div>

        <div class="form-group" >
            <label class="col-md-3 label">Book Image </label>
            <div class="col-md-6">
            <input type="file" name="book_img" class="form-control" placeholder="Enter Product Quantity" required >
            </div>
        </div>

        <div class="form-group" >
            <label class="col-md-3 label">Book Qty</label>
            <div class="col-md-6">
            <input type="number" name="book_qty" class="form-control" placeholder="Enter Book Quantity" required >
            </div>
        </div>

        <div class="form-group" >
            <label class="col-md-3 label"></label>
            <div class="col-md-6">
            <input type="submit" name="submit" class="btn btn-primary form-control" value="Insert Book" required >
            </div>
        </div>


        </form>
    </div>

    </body>
</html>


<?php

if(isset($_POST['submit'])){
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $book_cat = $_POST['book_cat'];
    $book_desc = $_POST['book_desc'];
    $book_price = $_POST['book_price'];

    $bsale_price = $_POST['bsale_price'];

    $book_img = $_FILES['book_img']['name'];

    $temp_name = $_FILES['book_img']['tmp_name'];

    $book_qty = $_POST['book_qty'];

    move_uploaded_file($temp_name,"assets/images/books/$book_img");

    $insert_book = "insert into products (cat_id,book_name,author_name,book_img,book_qty,book_price,bsale_price,book_desc) values ('$cat_id','$book_name','$author_name','$book_img','$book_qty','$book_price','$bsale_price','$book_desc')";

    $run_book = mysqli_query($connect, $insert_book);

    if($run_book){
        echo "<script>alert('Product has been inserted successfully')</script>";

        echo "<script>window.open('view_product.php','_self')</script>";
    }

}

?>