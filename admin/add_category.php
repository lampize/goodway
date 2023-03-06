<?php include '../assets/includes/connection.php'; ?>

<?php include 'header.php'; ?>
<html>
    <head>
        <title>Insert Category</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="assets/css/category.css">
    </head>
    <body>

    <button>
            <a type="button" name="submit" class="btn btn-primary form-back" href="view_category.php">Back</a>
    </button>
    <div class="content">
        <div class="heading">
            <h5 class="title">Add category</h5>
    </div>

    <div class="body">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-group" >
            <label class="col-md-3 label">Category Title</label>
            <div class="col-md-6">
            <input type="text" name="cat_title" placeholder="Enter New Category" class="form-control" required >
            </div>
        </div>

        <div class="form-group" >
            <label class="col-md-3 label"></label>
            <div class="col-md-6">
            <input type="submit" name="submit" class="btn btn-primary form-control" value="Insert Category" required >
            </div>
        </div>


        </form>
    </div>

    </body>
</html>

    <?php

    if(isset($_POST['submit'])){

        $cat_title = $_POST['cat_title'];

        $insert_cat = "insert into categories (cat_title) values ('$cat_title')";

        $run_cat = mysqli_query($connect, $insert_cat);

        if($run_cat){

            echo "<script>alert('New product Category Has been Inserted')</script>";

            echo "<script>window.open('view_category.php','_self')</script>";

        }
    }
    ?>