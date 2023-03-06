<?php

function component(){
    $element = "

    <div class="col-md-3 col-sm-6 my-3 my-md-0">
    <form action="home.php" method="post">
        <div class="card shadow">
            <div>
                <img src="assets/images/books/c3.jpg" alt="image1" class="img-fluid card-img-top">
            </div>
            <div class="card-body">
                <h5 class="card-title">Ijoriya</h5>
                <h6>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bx-star'></i>
                </h6>
                <p class="card-text">
                    Subin Bhattarai
                </p>
                <h5>
                    <small ><s class="text-secondary">$599</s></small>
                    <span class="price">$519</span>
                </h5>

                <button type="submit" class="btn aqua-gradient my-3" name ="add">Add to Cart<i class='bx bxs-cart'></i></button>

            </div>
        </div>
    </form>
    </div>
    ";
    echo $element;
}
?>