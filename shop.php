<?php
$site_title = 'Givni - Shop';
session_start();
include "givni/include/connection.php";
$date = date("d-m-Y");
?>

<?php include 'include/header.php' ?>

<body>
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table d1">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Givni Products</h2>
                </div>
            </div>
        </div>
        <div class="shape1"><img src="assets/img/shape1.png" alt="shape"></div>
        <div class="shape2 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
        <div class="shape3"><img src="assets/img/shape3.svg" alt="shape"></div>
        <div class="shape4"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape5"><img src="assets/img/shape5.png" alt="shape"></div>
        <div class="shape6 rotateme"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape7"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
    </div>
    <!-- End Page Title -->

    <!-- Start Shop Area -->
    <div class="shop-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products">
                        <div class="products-image">
                            <img src="assets/img/product-image/medical.png" alt="image">
                            <ul>
                                <!-- <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsModalCenter"><i data-feather="search"></i></a></li> -->
                                <li><a href="#" title="product-view"><i data-feather="eye"></i></a></li>
                                <li><a href="#" title="product-url"><i data-feather="link"></i></a></li>
                                <li><a href="tel:91-9835942411" title="product-url"><i data-feather="phone"></i></a></li>
                            </ul>
                        </div>
                        <div class="products-content">
                            <h3><a href="#">Medical Portfolio</a></h3>
                            <span>$1.00</span>
                            <ul>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                            </ul>
                            <a href="https://api.whatsapp.com/send?phone=919835942411" class="add-to-cart-btn">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products">
                        <div class="products-image">
                            <img src="assets/img/product-image/grocery.png" alt="image">
                            <ul>
                                <!-- <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsModalCenter"><i data-feather="search"></i></a></li> -->
                                <li><a href="#" title="product-view"><i data-feather="eye"></i></a></li>
                                <li><a href="#" title="product-url"><i data-feather="link"></i></a></li>
                                <li><a href="tel:91-9835942411" title="product-url"><i data-feather="phone"></i></a></li>
                            </ul>
                        </div>
                        <div class="products-content">
                            <h3><a href="#">Grocery Template</a></h3>
                            <span>$2.00</span>
                            <ul>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                            </ul>
                            <a href="https://api.whatsapp.com/send?phone=919835942411" class="add-to-cart-btn">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Area -->
    <!-- Start Products Modal -->
    <div class="modal fade" id="productsModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="products-image">
                            <img src="assets/img/shop-image/1.jpg" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="products-content">
                            <h3>Wood Pencil</h3>
                            <div class="price">
                                <span>$200.00</span> $191.00
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <form>
                                <div class="quantity">
                                    <div class="input-counter">
                                        <span class="minus-btn"><i data-feather="minus"></i></span>
                                        <input type="text" min="1" value="1">
                                        <span class="plus-btn"><i data-feather="plus"></i></span>
                                    </div>
                                </div>
                                <button type="submit">Add to Cart</button>
                            </form>
                            <div class="product-meta">
                                <span>Category: <a href="#">Pencil</a></span>
                                <span>Tag: <a href="#">Prints</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products Modal -->
    <?php include 'include/footer.php' ?>
</body>

</html>