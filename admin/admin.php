<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="assets/css/admin.css">

<?php include 'index.php'; ?>

<?php include 'header.php'; ?>

<div class="container">
<i class='bx bxs-book-content'></i> Dashboard
</div>

<div class="box">
    <ul class="ul">
    <!-- <h1>asdfghj</h1> -->
    <li class="li">
    <div class="panel panel-primary">
        <div class="panel-heading">
        <i class='bx bxs-layout' ></i>
        <div class="huge"> <?php echo $count_products;?> </div>
        <div class="pro">Products</div>
        </div>

        <a href="view_product.php">
        <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"> <i class='bx bxs-right-arrow-circle'></i> </span>
        </div>
    </a>
    </div>
    </li>


    <li class="li">
    <div class="panel panel-green">
        <div class="panel-heading">
        <i class='bx bxs-layout' ></i>
        <div class="huge"> <?php echo $count_customers;?> </div>
        <div class="pro">Users</div>
        </div>

        <a href="users.php">
        <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"> <i class='bx bxs-right-arrow-circle'></i> </span>
        </div>
    </a>
    </div>
    </li>

    <li class="li">
    <div class="panel panel-yellow">
        <div class="panel-heading">
        <i class='bx bxs-layout' ></i>
        <div class="huge"> <?php echo $count_categories;?> </div>
        <div class="pro">Categories</div>
        </div>

        <a href="view_category.php">
        <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"> <i class='bx bxs-right-arrow-circle'></i> </span>
        </div>
    </a>
    </div>
    </li>

    <li class="li">
    <div class="panel panel-red">
        <div class="panel-heading">
        <i class='bx bxs-layout' ></i>
        <div class="huge"> <?php echo $count_total_orders;?> </div>
        <div class="pro">Orders</div>
        </div>

        <a href="order.php">
        <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"> <i class='bx bxs-right-arrow-circle'></i> </span>
        </div>
    </a>
    </div>
    </li>

    <!-- <li class="li">
    <div class="panel panel-yellow">
        <div class="panel-heading">
        <i class='bx bxs-layout' ></i>
        <div class="huge"> <?php echo $count_earnings;?> </div>
        <div class="pro">Categories</div>
        </div>

        <a href="categories.php">
        <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"> <i class='bx bxs-right-arrow-circle'></i> </span>
        </div>
    </a>
    </div>
    </li> -->
    
    <li class="li">
    <div class="panel panel-yellow">
        <div class="panel-heading">
        <i class='bx bxs-layout' ></i>
        <div class="huge"> <?php echo $count_pending_orders;?> </div>
        <div class="pro">Pending Orders</div>
        </div>

        <a href="categories.php">
        <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"> <i class='bx bxs-right-arrow-circle'></i> </span>
        </div>
    </a>
    </div>
    </li>
</ul>
</div>

<!-- <div class="container">
<i class='bx bxs-book-content'></i> New Orders
</div> -->
<script src="assets/js/script.js"></script>