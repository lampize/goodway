<?php include '../assets/includes/connection.php'; ?>

<?php include 'header.php'; ?>
<html>
    <head>
        <title>View Categories</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="assets/css/category.css">
    </head>
    <body>

    <button>
            <a type="button" name="submit" class="btn btn-primary form-back" href="add_category.php">Add Category</a>
    </button>
    <div class="content">
        <div class="heading">
            <h5 class="title">View Category</h5>
        </div>

    <div class="panel-body"></div>
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped-sm">

    <thead>

    <tr>

    <th>#</th>
    <th>Name</th>
    <th>Delete</th>
    <th>Edit</th>

    </tr>

    </thead>

    <tbody>

    <?php 

    $i=0;

    $get_cat = "select * from categories";

    $run_cat = mysqli_query($connect, $get_cat);

    while($row_cat = mysqli_fetch_array($run_cat)){

        $cat_id = $row_cat['cat_id'];

        $cat_title = $row_cat['cat_title'];

        $i++;

        ?>

        <tr>
            <td>
                <?php echo $i; ?>
            </td>
            <td>
                <?php echo $cat_title; ?>
            </td>

            <td>
                <a href="delete_category.php<?php echo $cat_id; ?>">

                <i class='bx bx-trash'></i> Delete

                </a>
            </td>
            <td>
            <a href="edit_category.php<?php echo $cat_id; ?>">

            <i class='bx bx-edit' ></i> Edit

            </a>
            </td>
        </tr>

 <?php } ?>

    </tbody>

    </table>

    </div>

    </div>