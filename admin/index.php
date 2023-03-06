<?php include '../assets/includes/connection.php'; ?>

<?php 

$get_products = "SELECT * FROM products";
$run_products = mysqli_query($connect, $get_products);
$count_products = mysqli_num_rows($run_products);

$get_customers = "SELECT * FROM users";
$run_customers = mysqli_query($connect, $get_customers);
$count_customers = mysqli_num_rows($run_customers);

$get_categories = "SELECT * FROM categories";
$run_categories = mysqli_query($connect, $get_categories);
$count_categories = mysqli_num_rows($run_categories);

$get_total_orders = "SELECT * FROM orders";
$run_total_orders = mysqli_query($connect, $get_total_orders);
$count_total_orders = mysqli_num_rows($run_total_orders);

$get_earnings = "SELECT SUM( amount_due) as Total FROM orders WHERE order_status = 'Complete'";
$run_earnings = mysqli_query($connect, $get_earnings);
$row = mysqli_fetch_assoc($run_earnings);                       
$count_earnings = $row['Total'];

$get_pending_orders = "SELECT * FROM orders WHERE order_status='pending'";
$run_pending_orders = mysqli_query($connect,$get_pending_orders);
$count_pending_orders = mysqli_num_rows($run_pending_orders);

?>